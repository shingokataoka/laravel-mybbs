<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;


class PostController extends Controller
{

    public function test()
    {
        return view('test');
    }

    public function index()
    {
        $posts = Post::latest()->get();
        return view('index', ['posts' => $posts]);
    }
}
