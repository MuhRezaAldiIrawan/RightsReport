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
        // $pesan = "<p>Pesan Uji Coba 2</p>";

        // $data_email = [
        //     'subject' => 'Coba',
        //     'sender_name' => 'titaniaelvs@gmail.com',
        //     'isi' => $pesan
        // ];

        // Mail::to("rezaaldiirawan007@gmail.com")->send(new SendEmail($data_email));
        // return '<h1> Berhasil Mengirim Email </h1>';
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
