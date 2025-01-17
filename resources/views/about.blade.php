@extends('layout.main2') <!-- halaman ini menggunakan layout ini-->
@section('container') <!-- ini yang akan dipanggil pada main.blade-->
<h1>ini | about</h1>
<h2>{{ $title == 'abou' ? 'ini about' : ''}}</h2>
@endsection