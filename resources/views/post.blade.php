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
                <h2 class="mb-5">{{ $post->title }}</h2>
                <p>
                {!! $post->body !!}</p> {{-- agar jika ada tag html, dapat diajalnkan sesuai fungsi --}}
            </div>
            <!-- Gambar -->
            <div class="right">
                
            </div>
        </div>
    </div>
    <a href="/blog">back to school</a>
</div>
@endsection