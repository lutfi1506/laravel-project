<?php

namespace App\Http\Controllers;

use App\Charts\CustomersChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index( CustomersChart $customersChart )
    {
        return view('dashboard.index',[
            'title' => 'Dashboard',
            'costumers' => $customersChart->build()
        ]);
    }
}
