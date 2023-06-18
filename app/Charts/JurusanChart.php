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

        $jurusans = [
            'Akuntansi',
            'Teknik Elektro',
            'Teknik Mesin',
            'Teknik Sipil',
            'Teknik Kimia',
            'Administrasi Niaga'
        ];
        
        $data = [
            \App\Models\Report::where('jurusan', '=', 'Akuntansi')->count(),
            \App\Models\Report::where('jurusan', '=', 'Teknik Elektro')->count(),
            \App\Models\Report::where('jurusan', '=', 'Teknik Mesin')->count(),
            \App\Models\Report::where('jurusan', '=', 'Teknik Sipil')->count(),
            \App\Models\Report::where('jurusan', '=', 'Teknik Kimia')->count(),
            \App\Models\Report::where('jurusan', '=', 'Administrasi Niaga')->count()
        ];
        
        return $this->chart->barChart()
            // ->setTitle('Pelanggaran HAM Di tingkat Jurusan.')
            ->setSubtitle(date('Y'))
            ->addData('Jumlah', $data)
            ->setFontFamily('DM Sans')
            // ->setFontColor('#ff6384')
            ->setXAxis($jurusans);
        
    }
}

// $jurusans = [
//     'Akuntansi',
//     'Teknik Elektro',
//     'Teknik Mesin',
//     'Teknik Sipil',
//     'Teknik Kimia',
//     'Administrasi Niaga'
// ];

// $data = [];

// foreach ($jurusans as $jurusan) {
//     $count = Report::where('jurusan', $jurusan)->count();
//     $data[] = $count;
// }

// $colors = [
//     'Akuntansi' => '#FF6384',
//     'Teknik Elektro' => '#36A2EB',
//     'Teknik Mesin' => '#FFCE56',
//     'Teknik Sipil' => '#4BC0C0',
//     'Teknik Kimia' => '#9966FF',
//     'Administrasi Niaga' => '#FF9F40'
// ];

// return $this->chart->barChart()
//     ->setTitle('Pelanggaran HAM Di tingkat Jurusan.')
//     ->setSubtitle(date('Y'))
//     ->addData('Jumlah', $data)
//     ->setColors(array_values($colors))
//     ->setLabels($jurusans);