<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pricelist.index', [
            "title" => "Pricelist",
            "pakets" => Paket::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pricelist.create', [
            "title" => "Create Pricelist",
            "types" => ["pulsa", "Kuota", "E-wallet", "listrik"],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['kode'] = strtoupper($request['kode']);
        $validatedData = $request->validate([
            "kode" => "required|unique:pakets",
            "jenis" => "required",
            "harga" => "required",
            "deskripsi" => "required",
        ]);
        Paket::create($validatedData);
        return redirect('/pricelist')->with('success', 'New price list has been add');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $pricelist)
    {
        return view('pricelist.edit', [
            "title" => "Edit pricelist",
            "pricelist" => $pricelist,
            "types" => ["pulsa", "Kuota", "E-wallet", "listrik"],
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paket $pricelist)
    {
        $request['kode'] = strtoupper($request['kode']);
        $rules = [
            "jenis" => "required",
            "harga" => "required",
            "deskripsi" => "required",
        ];

        if($request->kode != $pricelist->kode){
            $rules['kode'] = 'required|unique:pakets';
        }
        $validatedData = $request->validate($rules);

        Paket::where('id',$pricelist->id)
            ->update($validatedData);
        return redirect('/pricelist')->with('success', 'New price list has been add');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $pricelist)
    {
        Paket::destroy($pricelist->id);
        return redirect('/pricelist')->with('success', 'pricelist has been deleted!');
    }
}
