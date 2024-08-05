<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnqMail;
use App\Mail\contactMail;
use App\Models\Enquiry;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

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


            // Subscribe the user to the Mailchimp list
            Newsletter::subscribe($request->get('gmail'), [
                'FNAME' => $request->get('f_name'),
                'LNAME' => $request->get('l_name'),
            ]);

            // Send an email notification to the admin
            Mail::raw(
                "New client submission:\n\nName: {$request->get('f_name')} {$request->get('l_name')}\nEmail: {$request->get('gmail')}\nPhone: {$request->get('phone')}\nMessage: {$request->get('description')}", 
                function ($message) {
                    $message->to('bsirisha511@gmail.com')
                            ->subject('New Client Submission');
                }
            );

          

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

        Newsletter::subscribe($request->email, ['full_name' => $request->name]);

        // Send an email to the admin
        Mail::raw("New client submission:\n\nName: {$request->name}\nEmail: {$request->email}\nMessage: {$request->message}", function ($message) {
            $message->to('bsirisha511@gmail.com')
                    ->subject('New Client Submission');
        });

        return redirect()->back()->with('success','Request Sent successfully.');
    }
}
