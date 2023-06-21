@extends('master.master')
@section('main')
    <h2 class="text-center">Selamat Datang {{ Auth::user()->name }}</h2>
@endsection
