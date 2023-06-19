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


    // public function sendemail(Request $request)
    // {
    //     $title = 'Send Email';
    //     // dd($request);
    //     // Validasi input jika diperlukan
    //     $request->validate([
    //         'to' => 'required|email',
    //         'subject' => 'required',
    //         'message' => 'required',
    //     ]);

    //     // Ambil data dari form
    //     $to = $request->input('to');
    //     $subject = $request->input('subject');
    //     $message = $request->input('message');

    //     // Kirim email
    //     $data_email = [
    //         'sender_email' => 'titaniaelvs@gmail.com',
    //         'sender_name' => 'titaniaelvs@gmail.com',
    //         'subject' => $subject,
    //         'message' => $message,
    //     ];
    //     Mail::to($to)->send(new SendEmail($data_email));
   

    //     // Redirect atau kirim respon sesuai kebutuhan Anda
    //     return view('pages.email',compact('title'))->with('success', 'Email berhasil dikirim!');
    // }
}
