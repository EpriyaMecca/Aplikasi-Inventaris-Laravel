<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Buat tampilin table barang
    public function index()
    {
        $daftarBarang = Barang::all();

        return view("barang.index", [
            "daftarBarang" => $daftarBarang
        ]);
    }

    // Buat tampilin formulir penambahan barang
    public function create()
    {
        $barang = Barang::orderByDesc("kode")->first();
        $kode = $barang ? $barang->kode : "BRG0";
        $kodeSelanjutnya = "BRG" . (substr($kode, 3) + 1);

        return view("barang.create", [
            "kode" => $kodeSelanjutnya,
        ]);
    }

    public function edit(string $kodeBarang)
    {
        $barang = Barang::where("kode", $kodeBarang)->first();

        return view("barang.edit", [
            "barang" => $barang
        ]);
    }

    // Ketika formulir penambahan barang disubmit
    public function store(Request $request)
    {
        Barang::create([
            "kode" => $request->kode,
            "nama" => $request->nama,
            "jenis" => $request->jenis,
            "jumlah" => $request->jumlah,
            "harga" => $request->harga
        ]);

        return redirect('/barang');
    }

    public function update(Request $request, string $kodeBarang)
    {
        $barang = Barang::where("kode", $kodeBarang)->first();
        $barang->nama = $request->nama;
        $barang->jenis = $request->jenis;
        $barang->jumlah = $request->jumlah;
        $barang->harga = $request->harga;
        $barang->save();

        return redirect('/barang');
    }
}
