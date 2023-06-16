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

    public function proggress_report(Request $request)
    {
        $title = 'RightsReports | Laporan Berjalan';
        $pagination = 10;

        $proggress_report = Report::with('kategori')
            ->where('status', 'proses')
            ->paginate($pagination);

        return view('pages.report', compact('title', 'proggress_report'))
            ->with('i', ($request->input('page', 1) - 1) * $pagination);
    }


    public function histori_report(Request $request)

    {
        // dd($request);
        $title = 'RightsReports | Riwayat Laporan';
        $pagination = 10;

        $histori_report = Report::with('kategori')
            ->where('status', 'selesai')
            ->paginate($pagination);

        return view('pages.report', compact('title', 'histori_report'))
            ->with('i', ($request->input('page', 1) - 1) * $pagination);
    }


    public function detailreport($id)
    {
        $title = 'RightsReports | Detail Report';
        $detailreport = Report::with('kategori')->where('id', $id)->get();

        return view('pages.detailreport', compact('title', 'detailreport'));
    }

    public function proses_report(Request $request)
    {
        // dd($request);
        DB::table('reports')->where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return redirect('/proggress_report');
    }

    public function end_report(Request $request)
    {
        // dd($request);
        DB::table('reports')->where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return redirect('/histori_report');
    }
}
