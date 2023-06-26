<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.index');
    }

    public function korupsi(Request $request)
    {
        return view('pages.main.korupsi');
    }

    public function korupsi2(Request $request)
    {
        return view('pages.main.korupsi2');
    }

    public function kekerasan(Request $request)
    {
        return view('pages.main.kekerasan');
    }

    public function bullying(Request $request)
    {
        return view('pages.main.bullying');
    }

    public function pembatasankebebasan(Request $request)
    {
        return view('pages.main.pembatasan');
    }

    public function diskriminasi(Request $request)
    {
        return view('pages.main.diskriminasi');
    }
    

    

    
}
