@extends('layout.main') <!-- halaman ini menggunakan layout ini-->
@section('container')
<div class="container">
<article>
    <h2>{{ $post["title"]}}</h2>
    <h5>{{ $post["author"]}}</h5>
    <h5>{{ $post["body"]}}</h5>
    <a href="/blog">back to school</a>
    </article>
</div>
@endsection