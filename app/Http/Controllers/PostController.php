<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Our Articles",
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
        ]);
    }

    public function show(post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
