<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function index()
    {
      $posts = Post::all();
      return view('posts', compact('posts'));
    }

    public function create()
    {
      $categories = \App\Category::all(); //passo direttamente anziché fare use

      return view('posts.create', compact('categories'));
    }

    public function save(Request $request)
    {
      dd($request->all());
    }
}
