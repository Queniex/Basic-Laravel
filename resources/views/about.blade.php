
@extends('layouts.main')

@section('container')
    <h1 class="text-black">Halaman About</h1>
    <h3 class="text-black">Nama : {{ $name }}</h3>
    <h3 class="text-black">Email : {{ $email }}</h3>
@endsection