@extends('layout.main') <!-- halaman ini menggunakan layout ini-->
<style>
  .carousel-inner img{
    height: 520px;
    width: 100%;
  }
</style>
@section('container') <!-- ini yang akan dipanggil pada main.blade-->
<div class="container-fluid">

  {{-- image slider --}}
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000"> <!-- 3000 = 3 detik -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
{{-- image slider --}}
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