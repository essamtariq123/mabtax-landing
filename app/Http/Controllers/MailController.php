<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactUs(Request $request) {
        $details = [
            'phone' => $request->phone,
            'email' => $request->email,
            'query' => $request->message
        ];

        Mail::to(env('MAIL_TO'))->send(new ContactUsMail($details));

        return redirect()->back()->with('message', 'Your Query has been forwarded, Thankyou');
    }
}
