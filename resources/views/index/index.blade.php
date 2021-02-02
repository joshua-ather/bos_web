@extends('layout.template')

@section('title', 'Dashboard ')

@push('script_begin')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset ('vendor/js/jquery.min.js') }}"></script>
@endpush

@section('sidebar')
    @include('layout.sidebar')
@endsection

@section('content')
    @include('index.content')
@endsection

@push('script_end')
    <script type="text/javascript" src="{{ asset ('js/app.js') }}"></script>
@endpush

@section('footer')
    @include('layout.footer')
@endsection
