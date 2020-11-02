<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
  <title>Il mio Negozio di Fumetti</title>
</head>
<body>
  <header>
    <div class="container">
      <h1>Il mio negozio di fumetti</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <ul class="comics-list">
        @foreach ($comics as $comic)
        <li class="comics-list-item">
          <div class="img-container">
            <img src="{{$comic->cover}}" alt="{{$comic->title}}">
          </div>
          <h2 class="title">{{$comic->title}} <span>#{{$comic->issue}}</span></h2>
          <h3 class="original-title">{{$comic->original_title}}</h3>
          <h4 class="author">{{$comic->author}}</h4>
          <p class="year">{{$comic->year}}</p>
          <p>Reading Style: {{$comic->reading}}</p>
          @if ($comic->color == 1)
            <p>Color</p>
          @else 
            <p>Black and white</p>
          @endif
          <h3 class="price">€ {{$comic->price}}</h3>
        @endforeach
        </li>  
      </ul>
    </div>
  </main>
</body>
</html>