@extends('layouts.main')

@section('container')
<b><a href="/posts" style="text-decoration: none"><i class="bi bi-reply-fill"></i>   Back To Posts</a></b>
                <br><br><br>

    <div class="container">
        <div class="row justify-content-center mv-5">
            <div class="col-md-8">
                
                <h2>{{ $post->title }}</h2>

                <h5>By. <a href="/posts?author={{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a></h5>
                <p>category : <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
            </div>
        </div>
    </div>


    







<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@endsection