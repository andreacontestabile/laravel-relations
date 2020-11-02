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
    <h1>Il mio negozio di fumetti</h1>
  </header>
  <main>
    <ul>
      @foreach ($comics as $comic)
        <img src="{{$comic->cover}}" alt="{{$comic->title}}">
        <h2>{{$comic->title}} <span>#{{$comic->issue}}</span></h2>
        <h3>{{$comic->original_title}}</h3>
        <h4>{{$comic->author}}</h4>
        <p>{{$comic->year}}</p>
        <h3>€ {{$comic->price}}</h3>
        <p>Reading Style: {{$comic->reading}}</p>
        @if ($comic->color == 1)
          <p>Color</p>
        @else 
          <p>Black and white</p>
        @endif
      @endforeach
    </ul>
  </main>
</body>
</html>