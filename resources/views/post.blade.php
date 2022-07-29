
@extends('layout.main')

@section('container')
<article>
    <h2>{{ $post->title }} </h2>
    <h5>Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    <h5>BY : {{ $post->author }}</h5>
    {!!  $post->body  !!} {{-- memakai ini bisa menjalankan input berupa tag atau yg aneh2 --}}
</article>
    <a href="/blog">back to post</a>
@endsection

