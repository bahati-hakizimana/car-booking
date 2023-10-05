<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
  public function product()
  {
    return view('admin.product');
  }
  /// show All product from database
  public function showproduct()
  {
    $data=product::all();
    return view('admin.showproduct',compact('data'));
  }
          //upload product

  public function uploadproduct(Request $request)
  {
    $data=new product;

    //image
    $image=$request->file;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('productimage',$imagename);
    $data->image=$imagename;

    //other fields

    $data->name=$request->name;
    $data->price=$request->price;
    $data->description=$request->des;

    // save Product

    $data->save();
    

    //return section

    return redirect()->back()->with('message', 'Product Added successfly');


  } 

  //delete product from database
  public function deleteproduct($id)
  {
    $data=product::find($id);
    $data->delete();
    return redirect()->back()->with('message','product deleted successfully');
  }

  //Update Product 

  public function updateproduct($id)
  {
    $data=product::find($id);
    return view('admin.updateproduct', compact('data'));
  }

  // // Update Now 

  // public function newproduct(Request $request, $id)
  // {
  //   $data=product::find($id);
  //   //image
  //   $image=$request->file;
  //   if($image)
  //   {
  //     $imagename=time().'.'.$image->getClientOriginalExtension();
  //   $request->file->move('productimage',$imagename);
  //   $data->image=$imagename;

  //   }
    

  //   //other fields

  //   $data->name=$request->name;
  //   $data->price=$request->price;
  //   $data->description=$request->des;

  //   // save Product

  //   $data->save();
    

  //   //return section

  //   return redirect()->back()->with('message', 'Product Updated successfly');
  // }


  public function newproduct(Request $request, $id)
{
    $data = product::find($id);

    // Image
    if ($request->hasFile('file')) {
        $image = $request->file('file');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('productimage', $imagename);
        $data->image = $imagename;
    }

    // Other fields
    $data->name = $request->input('name');
    $data->price = $request->input('price');

    // Ensure description is not null before setting it
    if ($request->has('desc')) {
        $data->description = $request->input('desc');
    }

    // Save Product
    $data->save();

    // Return section
    return redirect()->back()->with('message', 'Product Updated successfully');
}
  
  

}
