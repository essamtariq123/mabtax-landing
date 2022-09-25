<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Mail\ServiceQueryMail;
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

    public function serviceQuery(Request $request) {
        $details = [
            'phone' => $request->phone,
            'email' => $request->email,
            'query' => $request->service
        ];


        Mail::to(env('MAIL_TO'))->send(new ServiceQueryMail($details));

        return redirect()->back()->with('message', 'Your Query has been forwarded, Thankyou');
    }
}
