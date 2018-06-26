@extends('layout')

@section('content')
  <form class="form-group" action="{{route('save')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" name="name" class="form-control" placeholder="Inserisci categoria">
    </div>

    <div class="form-group">
      <input type="submit" value="SALVA">
    </div>


  </form>
@endsection
