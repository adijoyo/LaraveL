@extends('layouts.main')

@section('container')

<article>
    <b><a href="/posts" style="text-decoration: none"><i class="bi bi-reply-fill"></i>   Back To Posts</a></b>
    <br><br><br>
<h2>{{ $post->title }}</h2>
<h5>{{ $post->author }}</h5>
{!! $post->body !!}
</article>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@endsection