@php
  $action = 'pembelian.store';
  $header = 'Data Pembelian';
@endphp

@section('form')
  <div class="col-12">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="col-12">
    <label for="jumlah" class="form-label">Jumlah</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah">
  </div>
  <div class="col-12">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="number" class="form-control" id="tanggal" name="tanggal">
  </div>
  <div class="col-12">
    <label for="pemakaian" class="form-label">Pemakaian</label>
    <input type="text" class="form-control" id="pemakaian" name="pemakaian">
  </div>
  <div class="col-12">
    <label for="keterangan" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="keterangan" name="keterangan">
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
@endsection
@include('layouts.form')
