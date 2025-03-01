@extends('layout.main2') <!-- halaman ini menggunakan layout ini-->
@section('container2') <!-- ini yang akan dipanggil pada main.blade-->
<div class="container">
<div class="d-flex align-items-center">
        <h2>Berita Kampus</h2>
        <div class="flex-grow-1 border-bottom border-warning ms-3" style="height:8px;"></div>
    </div>

    <div class="row">
        @foreach ($posts as $post) <!-- looping ini array -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/3.webp') }}" alt="berita1" class="card-image-top">
                <div class="card-body">
                    <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    <h5>by : {{ $post->id }}</h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
