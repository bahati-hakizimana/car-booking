<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Booking;
use Paypack\Paypack;
use App\Models\Payment;
use Exception;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment as PayPalPayment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use Illuminate\Support\Facades\Log;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function redirect()
    {
        $user_type = Auth::user()?->user_type;

        if ($user_type == '1') {
            $totalPayments = Payment::count();
            $totalAmount = Payment::sum('amount');
            $totalBookings = Booking::count();
            $totalProduct = Product::count();
           
            $todayDate = Carbon::now()->toDateString();
            $thisMonth = Carbon::now()->format('m');
            $thisYear = Carbon::now()->format('Y');

            $todayBookings = Booking::whereDate('created_at', $todayDate)->count();
            $thisMontsBookings = Booking::whereMonth('created_at', $thisMonth)->count();
            $thisYearBookings = Booking::whereYear('created_at', $thisYear)->count();
            return view('admin.home',compact('totalPayments','totalAmount','totalBookings','todayBookings','thisMontsBookings','thisYearBookings','totalProduct'));
        } else {

            $data = product::paginate(6);
            $user = Auth()->user();
            $count = cart::where('phone', $user->phone)->count();
            return view('user.home', compact('data', 'count'));
        }
    }


    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = Product::paginate(6);

            // Add availability status to each product
            foreach ($data as $product) {
                $product->availability_status = $this->calculateAvailabilityStatus($product->id);
            }

            return view('user.home', compact('data'));
        }
    }

    private function calculateAvailabilityStatus($productId)
{
    // Logic to calculate availability status based on your implementation
    // Example: assuming you have a 'bookings' table with a 'product_id' and 'dropoff_date' column
    $latestBooking = Booking::where('product_id', $productId)
                           ->where('status', 'completed')
                           ->latest('dropoff_date')
                           ->first();

    if ($latestBooking && now()->lt(Carbon::parse($latestBooking->dropoff_date))) {
        return 'Booked';
    } else {
        return 'Available';
    }
}

    // Navigation Links

    public function products()
    {

        $data = product::all();
        return view('user.products', compact('data'));
    }

    public function bookings(Request $request, $id)
    {
        $data = product::find($id);
        return view('user.bookings', compact('data'));
    }
    public function book(Request $request, $id)
    {
        try {
            
            $booking = new Booking();
            // $booking->product_name = $request->input("product_name");
            $booking->product_id = $request->input("product_id");
            $booking->price = $request->input("price");
            $booking->quantity = $request->input("quantity");
            $booking->pickup_date = $request->input('pickup_date');
            $booking->dropoff_date = $request->input('dropoff_date');
            $booking->total_days = $request->input('days');
            $booking->airport = $request->input('airport');
            $booking->deposit = $request->input('deposit');
            $booking->totaldeposit = $request->input('totaldeposit');
            $booking->total_price = $request->input('totalprice');
            $booking->id_passport = $request->input('id_passport');
            $booking->terms_condition = $request->input('terms_condition');
            $booking->payment_method = $request->input('payment_method');
            $booking->driver_status = $request->input('driver_status');
            $booking->airport = $request->input('airport');
            $booking->first_name = $request->input('first_name');
            $booking->last_name = $request->input('last_name');
            $booking->email = $request->input('email');
            $booking->phone = $request->input('phone');
            $booking->destination  = $request->input('destination');
            // $booking->first_name = $request->first_name;
            // $booking->last_name = $request->last_name;
            // $booking->email = $request->email;
            // $booking->phone = $request->phone;
            // $booking->destination = $request->destination;
            $booking->status = 'not delivered';

            // dd($request->all());

            
            $booking->save();


        //update Availablity

        $product = Product::find($request->input("product_id"));

        if ($product) {
            $dropoffDate = Carbon::parse($request->input('dropoff_date'));

            // Check if the drop-off date is in the future
            if (now()->lt($dropoffDate)) {
                // Car is not available until the drop-off date
                $product->availability_status = 'booked';
            } else {
                // Car is available (drop-off date has passed)
                $product->availability_status = 'available';
            }

            $product->save();
        } else {
            // Handle the case where the car (product) is not found
            return redirect()->back()->with('error', 'Car not found for booking.');
        }

          
         //payment process
         $phoneNumber = $request->input('payment');
         $totalPrice = (int) $request->input('totalprice');
         $payment_method = $request->input('payment_method');

        

         $payment_method = $request->filled('payment_method') ? $request->input('payment_method') : null;


         if ($payment_method == "paypack") {
             //  Paypack logic
             $paypack = new Paypack();
             $paypack->config([
                 "client_id" => config('paypack.app_id'),
                 "client_secret" => config('paypack.secret')
             ]);

             $cashin = $paypack->Cashin([
                 'phone' => $phoneNumber,
                 'amount' => $totalPrice,
             ]);
             
             
             $payment = new Payment();
             $payment->ref = $cashin['ref'];
             $payment->status = $cashin['status'];
             $payment->amount = $cashin['amount'];
             $payment->provider = $cashin['provider'];
             $payment->kind = $cashin['kind'];
             $payment->created_at = $cashin['created_at'];

             
             
             $payment->save();


             $booking->payment_id = $payment->id;

            //  dd($request->all());
             $booking->save();

             return redirect()->back()->with('message', 'Payment Initiated! Please confirm on you mobile');
         } else if ($payment_method == "paypal") {
             // PayPal Logic 

             $provider = new PayPalClient;
             $provider->setApiCredentials(config('paypal'));
             $provider->getAccessToken();

             //response
             $response = $provider->createOrder([
                 'intent' => 'CAPTURE',
                 'application_context' => [
                     'return_url' => route('processSuccess'),
                     'cancel_url' => route('processCancel'),
                 ],
                 "purchase_units" => [
                     0 => [
                         "amount" => [
                             "currency_code" => "USD",
                             "value" => $totalPrice
                         ]
                     ]
                 ]
             ]);
             
             Log::info('PayPal Response: ' . print_r($response, true));

             if (isset($response['id'])) {
                 foreach ($response['links'] as $links) {
                     if ($links['rel'] == 'approve') {
                         return redirect()->away($links['href']);
                     }
                 }
                 dd($request->all());
             }
             
              else {
                 Log::error('PayPal Order Creation Error: ' . print_r($response, true));
             }
             
             dd($response);
         } else {
             return redirect()->back()->with("message", "Invalid payment method");
         }
         
     
     
     return redirect()->back()->with('message', 'Car booking confirmed successfully');
  }   catch (\Exception $e) {
     // Log the exception
     Log::error('Exception in confirmbookings method: ' . $e->getMessage());
 
     // Display exception details on the error page
     dd($e);
 
     // Handle other exceptions and redirect accordingly
     return redirect()->route('public.bookings')->with('error', 'Something went wrong. Please try again.');
 }
    }



    // processSuccess

    public function processSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()->route('public.bookings')->with('success', 'Transaction cpmplete.');
        } else {
            return redirect()
                ->route('public.bookings')
                ->with('error', $response['message'] ?? 'sommething went wrong.');
        }
    }
    // process cancel
    public function processCancel(Request $request)
    {
        return redirect()
            ->route('public.bookings')
            ->with('error', $response['message'] ?? 'You Canceled the transaction.');
    }

    //search Product
    public function search(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = product::paginate(6);
            return view('user.home', compact('data'));
        }

        $data = product::where('name', 'Like', '%' . $search . '%')->get();
        return view('user.home', compact('data'));
    }

    //add cart
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $product = product::find($id);
            $user = auth()->user();
            $cart = new cart;
            $cart->first_name = $user->first_name;
            $cart->last_name = $user->last_name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_name = $product->name;
            $cart->product_id = $product->id;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;

            $cart->save();
            return redirect()->back()->with('message', 'Product Added successfully');
        } else {
            return redirect('register');
        }
    }
    //Show Cart

    public function showcart()
    {
        $user = auth()->user();
        $cart = cart::where('phone', $user->phone)->get();
        $count = cart::where('phone', $user->phone)->count();
        return view('user.showcart', compact('count', 'cart'));
    }

    public function deletecart($id)
    {
        $data = cart::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Cart Deleted successfully');
    }

    // Edit Cart

    // public function updatecart(Request $request, $id)
    // {
    //     $cart=cart::find($id);
    //     $product=product::find($id);
    //     return view('user.editcart',compact('cart','product'));
    // }

    //confirm bookings



 // Make sure to import the Booking model

public function confirmbookings(Request $request)
{
    $user = $request->user();

    $first_name = $user->first_name;
    $last_name = $user->last_name;
    $email = $user->email;
    $phone = $user->phone;

    try {
        foreach ($request->productname as $key => $productname) {
            $booking = new Booking;
            $booking->product_id = $request->productid[$key];
            $booking->quantity = $request->quantity[$key];
            $booking->price = $request->price[$key];

            $booking->pickup_date = $request->input('pickupDate');
            $booking->dropoff_date = $request->input('dropoffDate');
            $booking->id_passport = $request->input('id_passport');
            $booking->total_days = $request->input('days');
            $booking->deposit = $request->input('deposit');
            $booking->totaldeposit = $request->input('totaldeposit');
            $booking->airport = $request->input('airport');
            $booking->destination = $request->input('destination');
            $booking->total_price = $request->input('totalprice');
            $booking->driver_status = $request->input('driver');
            $booking->terms_condition = $request->input('terms_condition');
            $booking->payment_method = $request->input('payment_method');

            $booking->first_name = $first_name;
            $booking->last_name = $last_name;
            $booking->email = $email;
            $booking->phone = $phone;

            $booking->status = 'not delivered';


            

            
            
            $booking->save();

    
            //payment process
            $phoneNumber = $request->input('payment');
            $totalPrice = (int) $request->input('totalprice');
            $payment_method = $request->input('payment_method');

           

            $payment_method = $request->filled('payment_method') ? $request->input('payment_method') : null;


            if ($payment_method == "paypack") {
                //  Paypack logic
                $paypack = new Paypack();
                $paypack->config([
                    "client_id" => config('paypack.app_id'),
                    "client_secret" => config('paypack.secret')
                ]);

                $cashin = $paypack->Cashin([
                    'phone' => $phoneNumber,
                    'amount' => $totalPrice,
                ]);
                
                
                $payment = new Payment();
                $payment->ref = $cashin['ref'];
                $payment->status = $cashin['status'];
                $payment->amount = $cashin['amount'];
                $payment->provider = $cashin['provider'];
                $payment->kind = $cashin['kind'];
                $payment->created_at = $cashin['created_at'];

                // dd($request->all());
                
                $payment->save();
          

                $booking->payment_id = $payment->id;

                
                $booking->save();

                return redirect()->back()->with('message', 'Payment Initiated! Please confirm on you mobile');
            } else if ($payment_method == "paypal") {
                // PayPal Logic 

                $provider = new PayPalClient;
                $provider->setApiCredentials(config('paypal'));
                $provider->getAccessToken();

                //response
                $response = $provider->createOrder([
                    'intent' => 'CAPTURE',
                    'application_context' => [
                        'return_url' => route('processSuccess'),
                        'cancel_url' => route('processCancel'),
                    ],
                    "purchase_units" => [
                        0 => [
                            "amount" => [
                                "currency_code" => "USD",
                                "value" => $totalPrice
                            ]
                        ]
                    ]
                ]);
                
                Log::info('PayPal Response: ' . print_r($response, true));

                if (isset($response['id'])) {
                    foreach ($response['links'] as $links) {
                        if ($links['rel'] == 'approve') {
                            return redirect()->away($links['href']);
                        }
                    }
                    dd($request->all());
                }
                
                 else {
                    Log::error('PayPal Order Creation Error: ' . print_r($response, true));
                }
                
                dd($response);
            } else {
                return redirect()->back()->with("message", "Invalid payment method");
            }
            
        }
        DB::table('carts')->where('phone', $phone)->delete();
        return redirect()->back()->with('message', 'Car booking confirmed successfully');
     }   catch (\Exception $e) {
        // Log the exception
        Log::error('Exception in confirmbookings method: ' . $e->getMessage());
    
        // Display exception details on the error page
        dd($e);
    
        // Handle other exceptions and redirect accordingly
        return redirect()->route('showcart')->with('error', 'Something went wrong. Please try again.');
    }

}



    //About us Page

    public function aboutus()
    {
        return view('user.aboutus');
    }

    // Terms and Conditions

    public function generatepdf()
    {
        $pdf = Pdf::loadView('terms-condition');
        return $pdf->download('CarRental-Terms & Condition' . time(). rand('1999','99999'). Str::random('10').'.pdf');
    }
}



//fo1_eXD05ovY73LbpP7k0TDworO4zory7X5YgcF2sE6nqO4