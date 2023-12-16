<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Payment;
use App\Models\Booking;


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
      'inner_image' => 'required|inner_image',

    ]);

    $data = new Product;

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
      $image = $request->file('image');
      $inner_image = $request->file('inner_image');
      $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
      $inner_imagename = uniqid() . '.' . $inner_image->getClientOriginalExtension();

      // Store the file in the 'productimage' directory
      $image->move('storage/products', $imagename);
      $inner_image->move('storage/products', $inner_imagename);

      $data->image = $imagename;
      $data->inner_image = $inner_imagename;



      // Other fields assignment
      $data->name = $request->name;
      $data->price = $request->price;
      $data->plate_number = $request->plate_number;
      $data->total_seating = $request->total_seating;
      $data->description = $request->des;

      // dd($request->all());

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
      $image->move('storage/products', $imagename);
      $inner_image->move('storage/products', $inner_imagename);
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

  public function booking()
  {
    $data = Booking::paginate(10);
    return view('admin.booking', compact('data'));
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
    return view('admin.payment', compact('data'));
  }
  public function showdetails($id)
  {
    $booking = booking::find($id);
    $payment = Payment::find($id);
    return view('admin.showdetails', compact('booking', 'payment'));
  }
}
