@section('content')
  <a href="{{ route($createRoute) }}" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
  <table class="table datatable">
    @yield('table')
  </table>
@endsection

@include('layouts.master')
