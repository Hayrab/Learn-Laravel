
@extends('layout.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <h2 class="mb-3 text-center">{{ $post->title }} </h2>

            <p>By. <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }} </a></p>
            <img src="https://source.unsplash.com/random/1080x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            <p> <small class="text-muted"> {{ $post->category->name }} (Foto. unsplash.com) </small></p>
            <article class="my-3">
                {!!  $post->body  !!} {{-- memakai ini bisa menjalankan input berupa tag atau yg aneh2 --}}
            </article>
            <div class="row">
                <div class="column">
                    <div class=" d-block py-2 px-4 border rounded-pill" style="background-color: rgba(86, 82, 139, 0.7)"><a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                </div>
                <div class="column">
                    <a class=" d-block mt-3 border rounded-pill" style="background-color: rgba(86, 82, 139, 0.7)" href="/blog">back to post</a>
                </div>
            </div>
            
        </div>
    </div>

@endsection

