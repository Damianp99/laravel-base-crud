@extends('layouts.main')
@section('title',' Indice')
@section('content')
<section class="container">
    <div class="d-flex flex-column align-items-center p-4 bg-black rounded">
        <h1 class="text-primary text-shadow ">Ecco l'indice dei fumetti che possediamo</h1>
        <a href="{{route('comics.create')}}" class="btn btn-primary my-2">Aggiungi un fumetto</a>
    </div>
    <div class="row">
        @forelse ($comics as $comic)
            <div class="col-3 p-3">
                <div class="card my-3" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic->title}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><strong>Prezzo: </strong>{{$comic->price}}€</li>
                      <li class="list-group-item"><strong>Serie: </strong>{{$comic->series}}</li>
                      <li class="list-group-item"><strong>Data: </strong>{{$comic->sale_date}}</li>
                      <li class="list-group-item"><strong>Tipologia: </strong>{{$comic->type}}</li>
                    </ul>
                    <div class="card-body d-flex justify-content-between">
                      <a href="{{route('comics.show',$comic->id)}}" class="card-link">Più informazioni </a>
                      <a href="{{route('comics.edit',$comic->id)}}" class="card-link"><i class="fa-solid fa-pen"></i></a>
                    </div>
                </div>
            </div>
        @empty
            <p>Non c'è alcun fumetto .</p>
        @endforelse    
    </div>
</section>


@endsection
