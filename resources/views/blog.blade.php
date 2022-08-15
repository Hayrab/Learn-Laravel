@extends('layout.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

    @foreach ($posts as $post)
        <article class = "mb-5 border-bottom">
            <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title   }}</a> </h2>
            <h5 >BY : <a class="text-decoration-none" href="/author/{{ $post->author->username }}">{{ $post->author->name }} </a> </h5>
            <p>{!! $post->excerpt !!}</p>
        </article>
    @endforeach
@endsection

