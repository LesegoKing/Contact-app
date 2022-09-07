<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'fullnames' => $request-> fullnames,
            'email' => $request-> email,
            'phone' => $request-> phone,
            'message' => $request-> message,
        ];
        
        Mail::to('kgosi@alphatobeta.co.za')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully!');
    }
}

