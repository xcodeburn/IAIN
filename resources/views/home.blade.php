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
      <img src="{{ asset('/img/1.webp') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/2.webp') }}" class="d-block w-100" alt="...">
    </div>
    {{-- <div class="carousel-item">
      <img src="/img/3.webp" class="d-block w-100" alt="...">
    </div> --}}
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
    <div class="info-header" style="text-align: center;">
        <h1 style="text-transform: uppercase;color: var(--main-color);">Info Kampus</h1>
        <p> Update selalu berita-berita yang berhubungan dengan kegiatan kampus</p>
    </div>
    {{-- berita kampaus --}}
    <div class="d-flex align-items-center">
        <h2>Berita Kampus</h2>
        <div class="flex-grow-1 border-bottom border-warning ms-3" style="height:8px;"></div>
    </div>
    <div class="row">
        @if($posts->isEmpty())
            <p class="text-center fs-4">"Belum Ada Postingan"</p>
        @else
            @foreach ($posts as $post) <!-- looping ini array -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/'.$post->img) }}" alt="berita" class="card-image-top">
                        <div class="card-body">
                            <h3 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h3>
                            {{-- <a href="/blog/{{ $post->slug }}" class="text-decortion-none">{{ $post->title }}</a> --}}
                                <small>
                                    <p>By. Admin {{ $post->author }}{{ $post->created_at->diffForHumans() }}</p>
                                </small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/blog/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
        @endforeach
        @endif
    </div>
</div>
{{-- kerjasama --}}

    <div class="kerjasama">Kerjasama</div>
        <div class="kerja">
            <img src="{{ asset('/img/baznas.webp') }}" alt="Logo 1" class="logo">
            <img src="{{ asset('/img/bsi2.webp') }}" alt="Logo 2" class="logo">
            <img src="{{ asset('/img/djp.svg.webp') }}" alt="Logo 3" class="logo">
            <img src="{{ asset('/img/mara.webp') }}" alt="Logo 7" class="logo">
            <img src="{{ asset('/img/rohil.webp') }}" alt="Logo 4" class="logo">
            <img src="{{ asset('/img/uin.webp') }}" alt="Logo 5" class="logo">
            <img src="{{ asset('/img/unishams.webp') }}" alt="Logo 6" class="logo">
        </div>
@endsection