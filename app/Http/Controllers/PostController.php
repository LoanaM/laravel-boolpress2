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
      return view('posts.create');
    }
}
