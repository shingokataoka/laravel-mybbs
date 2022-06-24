<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;
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


    public function show(Post $post)
    {
        return view('posts/show', ['post' => $post]);
    }


    public function create(Post $post)
    {
        return view('posts/create');
    }


    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()
            ->route('index');
    }

}
