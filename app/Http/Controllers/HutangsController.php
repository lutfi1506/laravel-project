<?php

namespace App\Http\Controllers;

use App\Models\Hutangs;
use Illuminate\Http\Request;

class HutangsController extends Controller
{
    public function index(){
        Hutangs::cek();
        return view('hutang.index',[
            "title" => "Daftar Hutang",
            "hutangs" => Hutangs::latest()->get()
        ]);
    }
    public function list(Hutangs $hutang){
        return view('hutang.detail',[
            "title" => "Daftar Hutang",
            "hutang" => $hutang
        ]);
    }
}
