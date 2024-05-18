@php
  $action = 'barang.update';
  $primaryKey = $barang->kode;
  $header = 'Data Barang';
@endphp

@section('form')
  @method('PUT')
  <div class="col-12">
    <label for="kode" class="form-label">Kode</label>
    <input type="text" class="form-control" id="kode" name="kode" value="{{ $barang->kode }}" readonly>
  </div>
  <div class="col-12">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ $barang->nama }}">
  </div>
  <div class="col-12">
    <label for="jenis" class="form-label">Jenis</label>
    <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $barang->jenis }}">
  </div>
  <div class="col-12">
    <label for="jumlah" class="form-label">Jumlah</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $barang->jumlah }}">
  </div>
  <div class="col-12">
    <label for="harga" class="form-label">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}">
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
@endsection
@include('layouts.form')
