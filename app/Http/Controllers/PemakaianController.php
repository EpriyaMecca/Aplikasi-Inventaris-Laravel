<?php

namespace App\Http\Controllers;

use App\Models\Pemakaian;
use Illuminate\Http\Request;

class PemakaianController extends Controller
{
    //membuat tampilan table barang
    public function index()
    {
        $daftarPemakaian = Pemakaian::all();
        return view("pemakaian.index", [
            "daftarPemakaian" => $daftarPemakaian
        ]);
    }

    //membuat tampilan formulir penambahan barang
    public function create()
    {
        return view("pemakaian.create");
    }

    //ketika formulir penambahan pemakaian di submit
    public function store(Request $request)
    {
        Pemakaian::create([
            "nama" => $request->nama,
            "jenis" => $request->jenis,
            "tanggal" => $request->tanggal,
            "pemakaian" => $request->pemakaian,
            "keterangan" => $request->keterangan
        ]);
        return redirect('/pemakaian');
    }
}
