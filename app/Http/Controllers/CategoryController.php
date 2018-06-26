<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories');
    }

    public function create()
    {
      return view('create');
    }

    public function save(Request $request)
    {

    }

}
