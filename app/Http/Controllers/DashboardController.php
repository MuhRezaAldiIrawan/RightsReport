<?php

namespace App\Http\Controllers;

use App\Charts\JurusanChart;
use App\Charts\ProdiChart;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Charts\ReportChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;



class DashboardController extends Controller
{
    public function index(ReportChart $ReportChart, JurusanChart $jurusanChart, ProdiChart $prodichart)
    {
        $title = 'RightsReport | Dashboard'; $title = 'RightsReport | Dashboard';


        $jumlahactivity = Report::all()->where('status', '=', 'pending')->count();

        $kekerasan = Report::all()->where('kategori_id', '=', '1')->count();
        $bullying = Report::all()->where('kategori_id', '=', '2')->count();
        $diskriminasi = Report::all()->where('kategori_id', '=', '3')->count();
        $korupsi = Report::all()->where('kategori_id', '=', '4')->count();
        $kebebasan = Report::all()->where('kategori_id', '=', '5')->count();

        $masuk = Report::all()->where('status', '=', 'masuk')->count();
        $proses = Report::all()->where('status', '=', 'proses')->count();


        return view('pages.dashboard', compact('title'))->with([
            'kekerasan' => $kekerasan,
            'bullying' => $bullying,
            'diskriminasi' => $diskriminasi,
            'korupsi' => $korupsi,
            'kebebasan' => $kebebasan,
            'masuk' => $masuk,
            'proses' => $proses,
            'ReportChart' => $ReportChart->build(),
            'jurusanChart' => $jurusanChart->build(),
            'prodichart' => $prodichart->build()
        ]);
    }
}
