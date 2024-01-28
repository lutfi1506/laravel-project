<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketsController extends Controller
{
    public function index(){
        return view('paket.index',[
            "title" => "Daftar Paket",
            "pakets" => Paket::all()
        ]);
    }
}
