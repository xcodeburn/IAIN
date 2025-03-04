@extends('layout.main2') <!-- halaman ini menggunakan layout ini-->
<style>
    img {
    /* width: 100%; */
    max-width: 520px;
    float: right ;
    height: auto;
    border-radius: 8px;
}
</style>
@section('container2')
<div class="container about">
    <div class="content mt-3">
            <!-- Sejarah Sekolah -->
            <img src="/img/sekolah.jpg" alt="Gambar Sekolah" class="school-image">
            <div class="left">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By. Admin {{ $post->author }}{{ $post->created_at->diffForHumans() }}</p>
                <article class="my-3">{!! $post->body !!}</article> {{-- agar jika ada tag html, dapat diajalnkan sesuai fungsi --}}
            </div>
            <a href="/blog" class="text-decoration-none"><- kembali ke berita</a>
        </div>
    </div>
    
@endsection