<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnqMail;
use App\Mail\contactMail;

class EnqController extends Controller
{
    //

    public function listing(Request $request)
    {
        // dd($request->all());
        $details = [
            'name' => $request->get('f_name'),
            'lname' => $request->get('l_name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('gmail'),
            'dis' => $request->get('description'),

        ];

        Mail::to('kgurjar1947@gmail.com')->send(new EnqMail($details));


        
        return redirect()->back()->with('success','Request Sent successfully.');
    }
    
    public function contact(Request $request)
    {
        $details = [
            'name' => $request->get('fname'),
            'city' => $request->get('city'),
            'phone' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
            'subject' => $request->get('subject'),

        ];

        Mail::to('kgurjar1947@gmail.com')->send(new contactMail($details));


        
        return redirect()->back()->with('success','Request Sent successfully.');
    }
}
