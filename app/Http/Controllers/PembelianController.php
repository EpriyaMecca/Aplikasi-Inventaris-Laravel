<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    //membuat tampilan table pembelian
    public function index()
    {
        $daftarPembelian = Pembelian::all();

        return view("pembelian.index", [
            "daftarPembelian" => $daftarPembelian
        ]);
    }

    //buat tampilan formulir penambahan pembelian
    public function create()
    {
        return view("pembelian.create");
    }

    //ketika formulir penambahan pembelian disubmit
    public function store(Request $request)
    {
        Pembelian::create([
            "nama" => $request->nama,
            "merk" => $request->merk,
            "jumlah" => $request->jumlah,
            "harga" => $request->harga,
            "total" => $request->total
        ]);

        return redirect('/pembelian');
    }
}
