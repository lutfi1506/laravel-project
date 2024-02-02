<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Hutangs;
use App\Models\Paket;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('history.index', [
            "title" => "History",
            "lists" => History::with(['paket', 'hutang'])->latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('history.create', [
            "title" => "Create History",
            "pakets" => Paket::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'paket_id' => 'required',
            'tanggal' => 'required|date',
            'no_hp' => 'required|min:10|max:15|',
            'nama' => 'required',
            'hutang' => 'integer',
            'status' => 'boolean',
        ]);
        if ($request->status) {
            $validatedHutang = $request->validate([
                'nama' => 'required',
            ]);
            Hutangs::create($validatedHutang);
        }
        History::create($validatedData);

        return redirect('/history')->with('succes', 'New History has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(History $history)
    {
        return view('history.show', [
            "title" => "Detail History",
            "lists" => $history
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        //
    }
}
