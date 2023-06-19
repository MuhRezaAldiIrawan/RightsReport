<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Report;

class ProdiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\RadialChart
    {
        $prodichart = Report::get();

        $data = [
            $prodichart->where('prodi','=','Teknik Komputer dan Jaringan')->count(),
            $prodichart->where('prodi','=','Teknik Multimedia dan Jaringan')->count(),
            $prodichart->where('prodi','=','Teknik Kimia Industri')->count(),
            $prodichart->where('prodi','=','Administrasi Niaga')->count(),
            $prodichart->where('prodi','=','Teknik Listrik')->count(),
        ];

        $labels = [
            'Teknik Komputer dan Jaringan',
            'Teknik Multimedia dan Jaringan',
            'Teknik Kimia Industri',
            'Administrasi Niaga',
            'Teknik Listrik'
        ];

        return $this->chart->RadialChart()
            // ->setTitle('Data Pelaporan Pelanggaran HAM')
            ->setSubtitle(date('Y'))
            ->setWidth(400)
            ->setHeight(400)
            ->addData($data)
            ->setLabels($labels);
            
    }
}
