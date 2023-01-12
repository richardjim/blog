<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
