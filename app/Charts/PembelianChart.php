<?php

namespace App\Charts;

use App\Models\History;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class PembelianChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $pembelianchart = History::latest();
        
        $data = [
            $pembelianchart->where('tanggal','1995')->count(),
            $pembelianchart->where('tanggal', 1996)->count(),
            $pembelianchart->where('tanggal', 1997)->count(),
            $pembelianchart->where('tanggal', 1998)->count(),
            $pembelianchart->where('tanggal', 1999)->count(),
            $pembelianchart->where('tanggal', 2000)->count(),
        ];
        $label = [
            'Tahun 1995',
            'Tahun 1996',
            'Tahun 1997',
            'Tahun 1998',
            'Tahun 1999',
            'Tahun 2000',

        ];
        dd($pembelianchart->where('tanggal','like','%2000%')->count());
        return $this->chart->lineChart()
            ->setTitle('data pembelian 2021.')
            ->setSubtitle(date('Y'))
            ->addData('Year', $data)
            ->setXAxis($label);
    }
}
