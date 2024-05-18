@php
  $createRoute = 'pemakaian.create';
  $header = 'Data Pemakaian';
@endphp

@section('table')
  <thead>
    <tr>
      <th>Nama</th>
      <th>Jumlah</th>
      {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
      <th>Tanggal</th>
      <th>Pemakaian</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($daftarPemakaian as $pemakaian)
      <tr>
        <td>{{ $pemakaian->nama }}</td>
        <td>{{ $pemakaian->jumlah }}</td>
        <td>{{ $pemakaian->tanggal }}</td>
        <td>{{ $pemakaian->pemakaian }}</td>
        <td>{{ $pemakaian->keterangan }}</td>
      </tr>
    @endforeach
  </tbody>
@endsection
@include('layouts.table')
