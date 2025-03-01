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
      <img src="/img/1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/3.webp" class="d-block w-100" alt="...">
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
    <div class="info-header" style="text-align: center; padding-top:100px">
        <h1 style="text-transform: uppercase;color: var(--main-color);">Info Kampus</h1>
        <p> Updaate selalu berita-berita yang berhubungan dengan kegiatan kampus</p>
    </div>
    {{-- berita kampaus --}}
    <h3 class="mb-4">Berita Kampus</h3>
    <div class="row">
    @foreach ($posts as $post)
    <div class="col-md-4">
        <div class="card">
            <img src="img/3.webp" alt="berita1" class="card-image-top">
            <div class="card-body">
                    <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    <h5>by : {{ $post->author }}</h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
{{-- kerjasama --}}

    <div class="kerjasama">Kerjasama</div>
        <div class="kerja">
            <img src="/img/baznas.webp" alt="Logo 1" class="logo">
            <img src="/img/bsi.svg" alt="Logo 2" class="logo">
            <img src="/img/djp.svg.webp" alt="Logo 3" class="logo">
            <img src="/img/rohil.webp" alt="Logo 4" class="logo">
            <img src="/img/uin.webp" alt="Logo 5" class="logo">
            <img src="/img/mara.svg" alt="Logo 6" class="logo" style="height:90px">
            <img src="/img/mara.svg" alt="Logo 7" class="logo">
        </div>
@endsection