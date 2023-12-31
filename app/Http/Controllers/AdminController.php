<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Payment;
use App\Models\Booking;

use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
  public function product()
  {
    return view('admin.product');
  }
  /// show All product from database
  public function showproduct()
  {
    $data = product::paginate(10);
    return view('admin.showproduct', compact('data'));
  }




  public function uploadproduct(Request $request)
  {
    $request->validate([
      'image' => 'required|image',
      // 'inner_image' => 'required|inner_image',
      'inner_image' => 'required|image',


    ]);

    $data = new Product;

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
      $image = $request->file('image');
      $inner_image = $request->file('inner_image');
      $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
      $inner_imagename = uniqid() . '.' . $inner_image->getClientOriginalExtension();

      // Store the file in the 'productimage' directory
      if (!File::exists('storage/productimage')) {
        File::makeDirectory('storage/productimage', 0755, true, true);
    }
    
    if (!File::exists('storage/productinner_image')) {
        File::makeDirectory('storage/productinner_image', 0755, true, true);
    }
      $image->move('storage/productimage', $imagename);
      $inner_image->move('storage/productinner_image', $inner_imagename);
      $data->inner_image = $inner_imagename;

      $data->image = $imagename;
      // $data->inner_image = $inner_imagename;



      // Other fields assignment
      $data->name = $request->name;
      $data->price = $request->price;
      $data->plate_number = $request->plate_number;
      $data->total_seating = $request->total_seating;
      $data->description = $request->des;

      // dd($inner_image);

      $data->save();

      return redirect()->back()->with('message', 'Product added successfully.');
    } else {
      return redirect()->back()->with('error', 'File upload failed or is not an image.');
    }
  }






  //delete product from database
  public function deleteproduct($id)
  {
    $data = product::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'product deleted successfully');
  }
  public function deletebooking($id)
  {
    $data = booking::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'booking deleted successfully');
  }

  //Update Product 

  public function updateproduct($id)
  {
    $data = product::find($id);
    return view('admin.updateproduct', compact('data'));
  }


  public function newproduct(Request $request, $id)
  {
    $data = product::find($id);

    // Image
    if ($request->hasFile('file')) {
      $image = $request->file('file');
      $inner_image = $request->file('inner_image');
      $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
      $inner_imagename = uniqid() . '.' . $inner_image->getClientOriginalExtension();
      $image->move('storage/productimage', $imagename);
      $inner_image->move('storage/productinner_image', $inner_imagename);
      $data->image = $imagename;
      $data->inner_image = $inner_imagename;
    }
    // dd($image,$inner_image);
    // Other fields
    $data->name = $request->input('name');
    $data->price = $request->input('price');
    $data->plate_number = $request->input('plate_number');
    $data->total_seating = $request->input('total_seating');

    // Ensure description is not null before setting it
    if ($request->has('desc')) {
      $data->description = $request->input('desc');
    }
    // dd($request->all());

    // Save Product
    $data->save();

    // Return section
    return redirect()->back()->with('message', 'Product Updated successfully');
  }

  public function booking(Request $request)
{
    // Filter
    $query = Booking::query();
    $date = $request->date_filter;

    switch ($date) {
        case 'today':
            $query->whereDate('created_at', Carbon::today());
            break;
        case 'yesterday':
            $query->whereDate('created_at', Carbon::yesterday());
            break;
        case 'this_week':
            $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
            break;
        case 'last_week':
            $query->whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()]);
            break;
        case 'this_month':
            $query->whereMonth('created_at', Carbon::now()->month);
            break;
        case 'last_month':
            $query->whereMonth('created_at', Carbon::now()->subMonth()->month);
            break;
        case 'this_year':
            $query->whereYear('created_at', Carbon::now()->year);
            break;
        case 'last_year':
            $query->whereYear('created_at', Carbon::now()->subYear()->year);
            break;
    }

    $bookings = $query->paginate(4);
    return view('admin.booking', compact('bookings','date'));
}

  public function cart(Request $request)
  {
    $data = cart::all();
    return view('admin.cart', compact('data'));
  }


  // Get Messages

  public function messages()
  {
    $data = contact::paginate(10);
    return view('admin.message', compact('data'));
  }
  public function customer()
  {
  }
  public function payment(Request $request)
  {
      $data = Payment::paginate(10);
      $totalPayments = Payment::count();
      // $count = DB::select('SELECT COUNT(*) as count FROM payments')[0]->count;
      // dd($count);
      return view('admin.payment', compact('data','totalPayments'));
  }
  public function showdetails($id)
  {
    $booking = booking::find($id);
    $payment = Payment::find($id);
    return view('admin.showdetails', compact('booking', 'payment'));
  }
}
