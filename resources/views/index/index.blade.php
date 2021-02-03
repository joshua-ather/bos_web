@extends('layout.template')

@section('title', 'Dashboard ')

@push('script_begin')
    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugin/fontawesome-free/css/all.min.css') }}">
    {{-- IonIcons --}}
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugin/ionicons/css/ionicons.min.css') }}">
    {{-- Theme style --}}
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.css') }}">
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    @include('index.content')
@endsection

@push('script_end')
    {{-- jQuery --}}
    <script src="{{ asset('vendor/jquery/jquery-min.js') }}"></script>
    {{-- Bootstrap --}}
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- AdminLTE --}}
    <script src="{{ asset('vendor/adminlte/js/adminlte.js') }}"></script>

    {{-- Plugin Script --}}
    <script src="{{ asset('vendor/adminlte/plugin/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/js/demo.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/js/dashboard3.js') }}"></script>

    {{-- My Script --}}
    <script type="text/javascript" src="{{ asset ('js/app.js') }}"></script>
@endpush

@section('footer')
    @include('layout.footer')
@endsection
