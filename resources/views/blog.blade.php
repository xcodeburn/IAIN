@extends('layout.main') <!-- halaman ini menggunakan layout ini-->
@section('container') <!-- ini yang akan dipanggil pada main.blade-->
@foreach ($posts as $post) <!-- looping ini array -->
<div class="container">
<article class="mb-5">    
    <h2><a href="/blog/{{ $post["slug"] }}">{{ $post["title"]  }}</a>
</h2>
    <h5>by : {{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>
</div>
@endforeach
@endsection