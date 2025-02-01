<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\validator;

class BarangController extends Controller
{
     /**
     * Display a listing of the resource.
     */

    public function index()

    {
        return view('barang.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        \\return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kode_kategori' => 'required'
        ]);

        $data = [
            'name_barang' => $request->name_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kode_kategori' => $request->kode_kategori
        ];

        DB::table('barang')->where('id', $id)->update($data);
        return redicet()->view('barang.index', [

        ]);


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Db::table('barang')->where('id', $id)->delete();
        return redirect()->route('barang.index');

    };
};


