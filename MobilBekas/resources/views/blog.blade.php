@extends('layout.main')
@section('container')
    @foreach($post as $post)
    <article class="mb-5">
        <h2>
            //pergi ke halaman sesuai slug yang dipilih
            <a href="/post/{{ $post["slug"] }}">{{ $post['title']  }}</a>
            </h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>
    @endforeach
@endsection