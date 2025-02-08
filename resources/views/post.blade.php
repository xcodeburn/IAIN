@extends('layout.main2') <!-- halaman ini menggunakan layout ini-->
@section('container2')
<div class="container">
    <h1 class="mb-5">{{ $post->title }}</h1>
    {!! $post->body !!} {{-- agar jika ada tag html, dapat diajalnkan sesuai fungsi --}}
    <a href="/blog">back to school</a>
</div>
@endsection