@extends('layout')

@section('content')

  <div class="row">
    <div class="col-12">
      <a class="btn btn-primary" href="{{route('posts.create')}}">Nuovo Post</a>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>Nome</tr>
      <tr>Slug</tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>

        </tr>
      @endforeach
    </tbody>
  </table>

@endsection


index page
