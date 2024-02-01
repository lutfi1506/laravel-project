<?php

namespace App\Charts;

use App\Models\History;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class CustomersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $tahun = date('Y');
        // $bulan = date('m');
        for($i = 2010; $i <= $tahun; $i++){
            $costumer = History::whereYear('tanggal',$i)->count();
            // $dataBulan[] = Carbon::create()->month($i)->format('F');
            $dataCostumer[] = $costumer;
            $dataTahun[] = $i;
        }

        // dd($dataCostumer);
        return $this->chart->lineChart()
            ->setTitle('Total penjualan tahun '.$tahun)
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Total costumers', $dataCostumer)
            ->setXAxis($dataTahun)
            ->setHeight(250);
    }
}
