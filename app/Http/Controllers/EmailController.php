<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    public function index(Request $request)
    {
        $title = 'RightsReport | Email';

        return view('pages.email', compact('title'));
    }


    public function sendemail(Request $request)
    {
        $details = [
            'to' => $request->to,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to($request->to)->send(new SendEmail($details));

        toast('Email Berhasil Dikirim', 'success');
        return redirect()->intended('/email');
    }
}
