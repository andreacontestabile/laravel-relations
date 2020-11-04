@extends("layouts.main")

@section("main-content")

  <main>
    <div class="container">
      <ul class="cards-list">
        @foreach ($comics as $comic)
        <li class="cards-list-item">
          <div class="img-container">
            <img src="{{$comic->cover}}" alt="{{$comic->title}}">
          </div>
          <h2 class="title">{{$comic->title}} <span>#{{$comic->issue}}</span></h2>
          <h3 class="original-title">{{$comic->original_title}}</h3>
          <h4 class="author"><a href="{{route("authors.show", $comic->author->id)}}">{{$comic->author->name}} {{$comic->author->lastname}}</a></h4>
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

@endsection
  
