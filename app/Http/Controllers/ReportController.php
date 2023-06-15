<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;
use App\Models\Report;

class ReportController extends Controller
{

    public function new_report(Request $request)
    {
        $title = 'RightsReports | Laporan Baru';
        $pagination = 10;
    
        $new_report = Report::with('kategori')
                            ->where('status', 'new')
                            ->paginate($pagination);
    
        return view('pages.report', compact('title', 'new_report'))
                    ->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function proggress_report()
    {
        $title = 'RightsReports | Laporan Berjalan';

        return view('pages.report', compact('title'));
    } 
    

    public function histori_report()
    {
        $title = 'RightsReports | Riwayat Laporan';

        return view('pages.report', compact('title'));
    } 

    
    public function detailreport()
    {
        $title = 'RightsReports | Detail Report';


        return view('pages.detailreport', compact('title'));
    } 
}
