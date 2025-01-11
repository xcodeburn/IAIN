@extends('layout.main') <!-- halaman ini menggunakan layout ini-->
@section('container') <!-- ini yang akan dipanggil pada main.blade-->
<div class="container-fluid">
    <div class="slider-container">
        <div class="slider">
            <img src="/img/1.jpg" alt="img1">
            <img src="/img/2.jpg" alt="img2">
            <img src="/img/3.jpg" alt="img3">
        </div>
    </div>
</div>
@endsection