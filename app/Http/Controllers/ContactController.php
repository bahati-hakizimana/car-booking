<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function contact()
    {
        return view('user.contact');

    } //End of contact

    //store message

    public function storemessage(Request $request)
    {
        contact::insert([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),

        ]);

        return redirect()->back()->with('message', 'Your message submitted successfly');
            
    
    }
}
