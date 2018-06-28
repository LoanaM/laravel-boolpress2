@extends('layout')

@section('content')

  <div class="row">
    <div class="col-12">
      <a class="btn btn-primary" href="{{route('create')}}">Aggiungi categoria</a>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>Nome</tr>
      <tr>Slug</tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td>{{$category->name}}</td>
          <td>{{$category->slug}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
