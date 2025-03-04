@extends('layout.main2') <!-- halaman ini menggunakan layout ini-->
@section('container2') <!-- ini yang akan dipanggil pada main.blade-->
<div class="container">
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
                        <img src="{{ asset('img/4.webp') }}" alt="berita" class="card-image-top">
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
@endsection
