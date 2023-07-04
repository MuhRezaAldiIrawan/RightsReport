<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function report(Request $request)
    {
        return view('pages.main.report');
    }

    public function addreport(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'angkatan' => 'required',
            'kategori_id' => 'required',
            'rincian' => 'required',
            'bukti' => 'image|file',
            'status' => 'required'

        ]);

        if ($request->file('bukti')) {
            $validatedData['bukti'] = $request->file('bukti')->store('foto-bukti');
        }

        Report::create($validatedData);

        Alert::success('Success', 'Pengaduan berhasil dilakukan');
        return redirect('/report');
    }

    
    

    

    
}
