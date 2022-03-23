@extends('layouts.main')
@section('title',' Fumetto')
@section('content')
<div class="container p-5">
    <div class="row  d-flex  p-5 bg-dark">
        <div class="col-6 ">
             <img src="{{$comic->thumb}}" class="img-comic" alt="{{$comic->title}}">
        </div>
        <div class="col-6 d-flex flex-column text-white">
            <div class="d-flex justify-content-between">
                <h5><strong>Titolo: </strong>{{$comic->title}}</h5>
                <a href="{{route('comics.edit',$comic->id)}}" class="card-link text-white shadow-azure"><i class="fa-solid fa-pen"></i></a>
            </div>
            <ul class="list-unstyled">
              <li><strong>Prezzo: </strong>{{$comic->price}}€  </li>
              <li><strong>Serie: </strong>{{$comic->series}}</li>
              <li><strong>Data: </strong>{{$comic->sale_date}}</li>
              <li><strong>Tipologia: </strong>{{$comic->type}}</li>
            </ul>
            <section>
                <h5>Descrizione</h5>
                <p>{{$comic->description}}</p>
            </section>
        </div>    
        <div class="col-12 d-flex justify-content-end my-2">
            <a href="{{route('comics.index')}}" class="btn btn-primary">Torna Indietro</a>
          </div> 
        
    </div>
</div>

    
@endsection