<?php

namespace App\Http\Controllers;

use App\Models\ListJoki;
use Illuminate\Http\Request;

class ListJokiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jokis = ListJoki::latest()->paginate(10);
        return view('listjoki.index', compact('jokis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('listjoki.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_joki' => 'required',
            'jenis_joki' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'keterangan' => 'required',
        ]);
        // dd($request-all());
        ListJoki::create($request->all());
        return redirect()->route('listjoki.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = ListJoki::findOrFail($id);
        return view('listjoki.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = ListJoki::findOrFail($id);
        $request->validate([
            'kode_joki',
            'jenis_joki',
            'harga',
            'stok',
            'keterangan',
        ]);
        $update->update($request->all());
        return redirect()->route('listjoki.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ListJoki::findOrFail($id)->delete();
        return redirect()->route('listjoki.index')->with('success', 'Data berhasil dihapus');
    }
}
