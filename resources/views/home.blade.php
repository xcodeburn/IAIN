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
<div class="container">
    <div class="info-header">
        <h1>Info Kampus</h1>
        <p> Updaate selalu berita-berita yang berhubungan dengan kegiatan kampus</p>
    </div>
    {{-- berita kampaus --}}
    <h3 class="mb-4">Berita Kampus</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="img/3.jpg" alt="berita1" class="card-image-top">
                <div class="card-body">
                    <p class="card-title">
                        post nomor 1
                    </p>
                    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sequi tempore doloremque nesciunt est, magni ducimus quod asperiores nisi sit?</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/3.jpg" alt="berita1" class="card-image-top">
                <div class="card-body">
                    <p class="card-title">
                        post nomor 2
                    </p>
                    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sequi tempore doloremque nesciunt est, magni ducimus quod asperiores nisi sit?</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/3.jpg" alt="berita1" class="card-image-top">
                <div class="card-body">
                    <p class="card-title">
                        post nomor 3
                    </p>
                    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sequi tempore doloremque nesciunt est, magni ducimus quod asperiores nisi sit?</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection