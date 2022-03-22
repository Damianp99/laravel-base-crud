@extends('layouts.main')
@section('title',' Home')
@section('content')
<div class="container">
    <section class="text-center bg-black py-2">
        <h1 class="text-primary text-shadow">Benvenuti nella nostra edicola</h1>
        <p class="text-white fw-bold shadow-azure">La collezione mostra tutti gli eroi più famosi della DC COMICS, inclusi: Superman, Batman e Acquaman – i più famosi supereroi della terra.</p>
    </section>
    <div class="d-flex bg-heroes p-3 rounded-3">
        <div class="row justify-content-center">
            @forelse($comics as $comic)
            {{-- da togliere role button --}}
                <div class="card p-3 m-3" role="button" style="width: 18rem;">
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
    
