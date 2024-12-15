@extends('layout.main')
@section('container')
    <h1>Ini halaman about</h1>
    <h3><?= $name; ?></h3>
    <h3>{{$email}}</h3>
    <h3>{{$name}}</h3>
    <h2>{{ $name }}</h2>
@endsection