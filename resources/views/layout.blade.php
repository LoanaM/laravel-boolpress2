<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{(!empty($title)) ? $title : 'Boolpress'}}</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('home')}}">Boolpress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('index')}}">Categorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('posts.index')}}">Post</a>
            </li>

          </ul>
        </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>
