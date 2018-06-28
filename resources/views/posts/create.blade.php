@extends('layout')

@section('content')
  <form class="form-group" action="{{route('posts.save')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="categories">Categorie</label>
      <select name="categories" multiple>
        @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->id}} - {{$category->name}}</option>          
        @endforeach

      </select>

    </div>

    <div class="form-group">
      <label for="name">Titolo</label>
      <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="content">Contenuto</label>
      <textarea class="form-control" name="content"></textarea>
    </div>

    <div class="form-group">
      <input type="submit" value="SALVA">
    </div>


  </form>
@endsection
