@extends('layout.main')

@section('container')

<h1 class="mb-5">Post Category: {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class = "mb-5">
            <h2><a href="/post/{{ $post->slug }}"> {{ $post->title   }}</a> </h2>
            <h5>BY : {{ $post->author->name }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection

// sudah tidak berguna karena tampilan hanya dari blog