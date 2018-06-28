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
      $request->validate([
        'title' => 'required|min:4',
        'content' => 'required|min:200',
        'categories' => 'required'
      ]);
      $data = $request->all();

      $data['slug'] = str_slug($data['title']);
      $existingSlug = Post::where('slug' , $data['slug'])->first();
      if ($existingSlug) return "Slug già esistente";

      $post = New Post;
      $post->fill($data);
      $post->save();

      dd($post->id);
    }
}
