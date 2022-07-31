@extends('layout.main')

@section('container')

<h1 class="mb-5">Halaman Blog</h1>

    @foreach ($posts as $post)
        <article class = "mb-5 border-bottom">
            <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title   }}</a> </h2>
            <h5 class="text-decoration-none">BY : {{ $post->user->name }}{{ $post->author }}</h5>
            <p>{!! $post->excerpt !!}</p>
        </article>
    @endforeach
@endsection

