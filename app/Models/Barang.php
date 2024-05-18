<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $timestamps = false;

    protected $table = 'barang';
    protected $primaryKey = 'kode';
    protected $keyType = 'string';

    protected $fillable = [
        "kode",
        "nama",
        "jenis",
        "jumlah",
        "harga"
    ];

    use HasFactory;
}
