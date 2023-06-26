<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function index(Request $request)
    {
        $title = 'RightsReport | Whatsapp';

        return view('pages.whatsapp', compact('title'));

    }
}
