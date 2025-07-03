@extends('layout.main2') <!-- halaman ini menggunakan layout ini-->
<style>
    .school-image {
  float: right;
  margin: 0 0 15px 20px;
  max-width: 300px;
  height: auto;
  border-radius: 8px;
}

.left h2, .left p, .left article {
  text-align: justify;
}

.content {
  overflow: hidden;
}

@media (max-width: 768px) {
  .school-image {
    float: none;
    display: block;
    margin: 0 auto 20px;
    max-width: 100%;
  }
}
</style>
@section('container2')
<div class="container about">
    <div class="content mt-3 clearfix">
        <!-- Gambar mengambang di kanan atas -->
        <div class="left">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <p>By. {{ $post->author }} | {{ $post->created_at->diffForHumans() }}</p>
            <article class="my-3">
                <img src="{{ asset('img/'.$post->img) }}" alt="institut agama islam rokan post" class="school-image" loading="lazy">
                {!! $post->body !!}
            </article>
        </div>
        </div>
        <div style="clear: both;"></div> <!-- pastikan elemen di bawahnya tidak terganggu float -->
        <a href="/blog" class="text-decoration-none">&larr; kembali ke berita</a>
    </div>
</div>
@endsection