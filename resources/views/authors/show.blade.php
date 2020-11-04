@extends ("layouts.main")

@section("main-content")

<main>
  <div class="container">
    <ul class="cards-list">
      
      <li class="cards-list-item">
        <div class="img-container">
          <img src="{{$author->info->image}}" alt="{{$author->name}} {{$author->lastname}}">
        </div>
        <h2 class="title">{{$author->name}} {{$author->lastname}}</h2>
        <h3 class="original-title">{{$author->date_of_birth}}</h3>
        <p>{{$author->info->biography}}</p>
        
      
      </li>  
    </ul>

    <a class="back" href="{{route("comics.index")}}">Torna all'indice</a>
  </div>
</main>

@endsection