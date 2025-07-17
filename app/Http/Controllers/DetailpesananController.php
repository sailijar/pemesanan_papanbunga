<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_pesanan;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Pesanan;

class DetailpesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data detail pesanan
        $nomor = 1;
        $detail_pesanan = Detail_pesanan::all();
        return view('layouts.detail_pesanan.index', compact('detail_pesanan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah detail pesanan
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        $pesanan = Pesanan::all(); // Untuk dropdown pelanggan
        return view('layouts.detail_pesanan.create', compact('produk','pesanan','pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_pelanggan'     => 'required',
            'id_pesanan'       => 'required',
            'id_produk'        => 'required',
            'isi_papan'        => 'required|string|max:255',
            'jumlah'           => 'required|integer|min:1',
            'total_harga'      => 'required|numeric|min:0',
        ]);

        $detail_pesanan = new Detail_pesanan();
        $detail_pesanan->id_pelanggan= $request->id_pelanggan;
        $detail_pesanan->id_pesanan= $request->id_pesanan;
        $detail_pesanan->id_produk= $request->id_produk;
        $detail_pesanan->isi_papan= $request->isi_papan;
        $detail_pesanan->jumlah = $request->jumlah;
        $detail_pesanan->total_harga = $request->total_harga;
        $detail_pesanan->save();

        //  Detail_pesanan::create($request->all());

        return redirect('/detail_pesanan')->with('success', 'Detail pesanan berhasil ditambahkan.');
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
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        $pesanan = Pesanan::all();
        $detail_pesanan = Detail_pesanan::findOrFail($id);
        return view('layouts.detail_pesanan.edit', compact('detail_pesanan', 'produk','pesanan','pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'id_pelanggan'     => 'required|numeric',
            'id_pesanan'       => 'required|numeric',
            'id_produk'        => 'required|numeric',
            'isi_papan'        => 'required|string|max:255',
            'jumlah'           => 'required|integer|min:1',
            'total_harga'      => 'required|numeric|min:0',
        ]);

        $detail_pesanan = Detail_pesanan::findOrFail($id);
        $detail_pesanan->id_pelanggan    = $request->id_pelanggan;
        $detail_pesanan->id_pesanan      = $request->id_pesanan;
        $detail_pesanan->id_produk       = $request->id_produk;
        $detail_pesanan->isi_papan       = $request->isi_papan;
        $detail_pesanan->jumlah          = $request->jumlah;
        $detail_pesanan->total_harga     = $request->total_harga;
        $detail_pesanan->save();

        return redirect('/detail_pesanan')->with('success', 'Detail pesanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $detail_pesanan = Detail_pesanan::findOrFail($id);
        $detail_pesanan->delete();

        return redirect('/detail_pesanan')->with('success', 'Detail pesanan berhasil dihapus.');
    }
}
