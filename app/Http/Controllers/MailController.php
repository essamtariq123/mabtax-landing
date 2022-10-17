<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Mail\FreeConsultMail;
use App\Mail\ServiceQueryMail;
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

    public function freeConsult(Request $request) {
        $details = [
            'phone' => $request->phone,
            'query' => 'Free Consuultation'
        ];

        Mail::to(env('MAIL_TO'))->send(new FreeConsultMail($details));

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
