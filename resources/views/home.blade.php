@extends('layouts.main')
@section('title',' Home')
@section('content')
<div class="container">
    <section class="text-center">
        <h1 class="text-primary">Benvenuti nella nostra edicola</h1>
        <p class="text-white">La collezione mostra tutti gli eroi più famosi della DC COMICS, inclusi: Superman, Batman e Acquaman – i più famosi supereroi della terra.</p>
    </section>
    <div class="d-flex bg-dark p-3 rounded-3">
        <div class="row justify-content-center">
            @forelse($comics as $comic)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    </div>
                </div>
            @empty
                <p>Non ci sono illustrazioni in anteprima</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
    
