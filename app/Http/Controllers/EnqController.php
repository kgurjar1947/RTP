<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnqMail;
use App\Mail\contactMail;
use App\Models\Enquiry;

class EnqController extends Controller
{
    //

    public function listing(Request $request)
    {
   
            $enq = new Enquiry([
                'service' => '2', //contact
                'name' => $request->get('f_name'),
                'lname' => $request->get('l_name'),
                'phone' => $request->get('phone'),
                'email' => $request->get('gmail'),
                'message' => $request->get('description'),
             
            ]);

            // Save the new Country entry
            $enq->save();

        return redirect()->back()->with('success','Request Sent successfully.');
    }
    
    public function contact(Request $request)
    {
      
         // Create a new Country entry
        $enq = new Enquiry([
            'service' => '1', //contact
            'name' => $request->get('full_name'),
            'city' => $request->get('city'),
            'phone' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
            'subject' => $request->get('subject'),
        ]);
    
        // Save the new Country entry
        $enq->save();
      

        return redirect()->back()->with('success','Request Sent successfully.');
    }
}
