@section('content')
  <form class="row g-3" action="{{ route($action, $primaryKey) }}" method="POST">
    @csrf

    @yield('form')
  </form>
@endsection
@include('layouts.master')
