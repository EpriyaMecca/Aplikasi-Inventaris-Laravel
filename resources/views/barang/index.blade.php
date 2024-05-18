@php
  $createRoute = 'barang.create';
  $header = 'Data Barang';
@endphp

@section('table')
  <thead>
    <tr>
      <th>Kode</th>
      <th>Nama</th>
      <th>Jenis</th>
      {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($daftarBarang as $barang)
      <tr>
        <td>{{ $barang->kode }}</td>
        <td>{{ $barang->nama }}</td>
        <td>{{ $barang->jenis }}</td>
        <td>{{ $barang->jumlah }}</td>
        <td>{{ $barang->harga }}</td>
        <td>
          <div>
            <a href="{{ route('barang.edit', $barang->kode) }}" type="button" class="btn btn-primary"><i
                class="bi bi-pencil"></i></a>
            <a type="button" class="btn btn-danger"><i class="bi bi-trash"></i></a>
          </div>
        </td>
      </tr>
    @endforeach
  </tbody>
@endsection
@include('layouts.table')
