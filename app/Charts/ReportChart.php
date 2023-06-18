<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Report;

class ReportChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\donutChart
    {
        $reportchart = Report::get();

        $data = [
            $reportchart->where('kategori_id','=','1')->count(),
            $reportchart->where('kategori_id','=','2')->count(),
            $reportchart->where('kategori_id','=','3')->count(),
            $reportchart->where('kategori_id','=','4')->count(),
            $reportchart->where('kategori_id','=','5')->count(),
        ];

        $labels = [
            'Kekerasan',
            'bullying',
            'diskriminasi',
            'Korupsi',
            'Pembatasan Kebebasan'
        ];

        return $this->chart->donutChart()
            // ->setTitle('Data Pelaporan Pelanggaran HAM')
            ->setSubtitle(date('Y'))
            ->setWidth(500)
            ->setHeight(500)
            ->addData($data)
            ->setLabels($labels);
    }
}
