@extends('layout.main2') <!-- halaman ini menggunakan layout ini-->
@section('container') <!-- ini yang akan dipanggil pada main.blade-->
<h3 class="mb-4">Berita Kampus</h3>
<div class="container">
    <div class="row">
        @foreach ($posts as $post) <!-- looping ini array -->
        <div class="col-md-4">
            <div class="card">
                <img src="img/3.jpg" alt="berita1" class="card-image-top">
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
@endsection
