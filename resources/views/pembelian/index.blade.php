@php
  $createRoute = 'pembelian.create';
  $header = 'Data Pembelian';
@endphp

@section('table')
  <thead>
    <tr>
      <th>Nama</th>
      <th>Merk</th>
      <th>Jumlah</th>
      {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
      <th>Harga</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($daftarPembelian as $pembelian)
      <tr>
        <td>{{ $barang->nama }}</td>
        <td>{{ $barang->merk }}</td>
        <td>{{ $barang->jumlah }}</td>
        <td>{{ $barang->harga }}</td>
        <td>{{ $barang->total }}</td>
      </tr>
    @endforeach
  </tbody>
@endsection
@include('layouts.table')
