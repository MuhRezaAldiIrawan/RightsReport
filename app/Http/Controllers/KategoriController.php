<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $title = 'RightsReports | Kategori';
        $pagination = 10;
        $kategori = DB::table('kategoris')->paginate($pagination);

        return view('pages.kategori', ['kategori' => $kategori], compact('title'))->with('i', ($request->input('page', 1) - 1) *  $pagination);
    }
}
