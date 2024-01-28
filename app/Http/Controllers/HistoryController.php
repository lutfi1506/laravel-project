<?php

namespace App\Http\Controllers;

use App\Charts\PembelianChart;
use App\Http\Requests\StoreListsRequest;
use App\Http\Requests\UpdateListsRequest;
use App\Models\History;
use App\MyCharts\MyChart;

class HistoryController extends Controller
{
    public function index(PembelianChart $pembelianchart){
        return view('history.index',[
            "title" => "History",
            "lists" => History::with(['paket', 'hutang'])->latest()->filter(request(['search']))->paginate(10)->withQueryString(),
            "pembelianChart" => $pembelianchart->build()
        ]);
    }
    public function detail(History $list){
        return view('history.detail',[
            "title" => "Detail",
            "lists" => $list
        ]);
    }
}