@extends('layout.main')

@section('container')
    @foreach ($posts as $post)
        <article clas = "mb-5">
            <h2><a href="/post/{{ $post->slug }}"> {{ $post->title   }}</a> </h2>
            <h5>BY : {{ $post->author }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection

