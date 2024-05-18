<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->string("kode", 20);
            $table->string("nama", 50);
            $table->string("jenis", 30);
            $table->unsignedInteger("jumlah");
            $table->decimal("harga");
            $table->primary("kode");
            $table->unique("nama");
        });

        Schema::create('pembelian', function (Blueprint $table) {
            $table->string("kode_barang", 20);
            $table->string("merk", 30);
            $table->unsignedInteger("jumlah");
            $table->foreign("kode_barang")->references("kode")->on("barang");
        });

        Schema::create('pemakaian', function (Blueprint $table) {
            $table->string("kode_barang", 30);
            $table->unsignedInteger("jumlah");
            $table->date("tanggal");
            $table->string("pemakaian");
            $table->string("keterangan");
            $table->foreign("kode_barang")->references("kode")->on("barang");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("pemakaian");
        Schema::dropIfExists("pembelian");
        Schema::dropIfExists("barang");
    }
};
