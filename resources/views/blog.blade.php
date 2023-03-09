@extends('layout.main')

@section('container')

<h1 class="my-4 text-center">{{ $title }}</h1>

<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/blog">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-5">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())

<div class="card mb-3" >
    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none">
        <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></div>
        <img src="https://source.unsplash.com/random/1080x400?{{ $posts[0]->category->name }};" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body">
            <h3 class="card-title text-decoration-none text-black">{{  $posts[0]->title }}</h3>
            <p> <small class="text-muted">BY : <a class="text-decoration-none" href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }} </a> </small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary ">Read More</a>
        </div>
    </a>
</div>


<div class="containter">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3" >
                <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/random/1080x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h4 class="card-title text-decoration-none">{{ $post->title   }}</h4>
                        <p> <small class="text-muted">BY : <a class="text-decoration-none" href="/blog?author= {{ $post->author->username }}">{{ $post->author->name }} </a> </small></p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@else

<p class="text-center fs-4">No Post Found</p>

@endif

{{ $posts->links() }}
    
@endsection

