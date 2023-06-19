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
            ->setFontFamily('cursive')
            // ->setFontColor('#ff6384')
            ->setXAxis($jurusans);
        
    }
}