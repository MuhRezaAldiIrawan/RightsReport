<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Report;

class JurusanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        // $reportchart = Report::get();

        // $data = [
        //     $reportchart->where('jurusan','=','Akuntansi')->count(),
        //     $reportchart->where('jurusan','=','Teknik Elektro')->count(),
        //     $reportchart->where('jurusan','=','Teknik Mesin')->count(),
        //     $reportchart->where('jurusan','=','Teknik Sipil')->count(),
        //     $reportchart->where('jurusan','=','Teknik Kimia')->count(),
        //     $reportchart->where('jurusan','=','Administrasi Niaga')->count(),
        // ];

        // $labels = [
        //     'Kekerasan',
        //     'bullying',
        //     'diskriminasi',
        //     'Korupsi',
        //     'Pembatasan Kebebasan'
        // ];

        return $this->chart->barChart()
        ->setTitle('Pelanggaran HAM Di tingkat Jurusan.')
        ->setSubtitle(date('Y'))
        ->addData('Akuntansi', [\App\Models\Report::where('jurusan', '=', 'Akuntansi')->count()])
        ->addData('Teknik Elektro', [\App\Models\Report::where('jurusan', '=', 'Teknik Elektro')->count()])
        ->addData('Teknik Mesin', [\App\Models\Report::where('jurusan', '=', 'Teknik Mesin')->count()])
        ->addData('Teknik Sipil', [\App\Models\Report::where('jurusan', '=', 'Teknik Sipil')->count()])
        ->addData('Teknik Kimia', [\App\Models\Report::where('jurusan', '=', 'Teknik Kimia')->count()])
        ->addData('Administrasi Niaga', [\App\Models\Report::where('jurusan', '=', 'Administrasi Niaga')->count()])
        ->setXAxis(['Akuntansi', 'Teknik Elektro', 'Teknik Mesin', 'Teknik Sipil', 'Teknik Kimia', 'Administrasi Niaga']);
    
    }
}
