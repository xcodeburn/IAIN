@extends('layout.main')

@section('container')
    <article>
        <h2>{{$bp["title"]}}</h2>
        <h2>{{$bp["author"]}}</h2>
        <p>{{$bp["body"]}}</p>
    </article>
@endsection