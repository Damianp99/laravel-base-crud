@extends('layouts.main')
@section('title','Aggiungi')
@section('content')
<div class="container form-section py-5">
    <div class="black-layer rounded p-5">
        <section class="d-flex justify-content-between align-items-center">
            <h1 class="text-white shadow-azure">Aggiungi un fumetto</h1>
            <a href="{{route('comics.index')}}" class="btn btn-primary">Torna indietro</a>
        </section>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="row text-white fw-bold">
                <div class="col-4 shadow-azure">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text"  class="form-control" id="title" name="title" required>
                </div>
                <div class="col-4 shadow-azure">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text"  class="form-control" id="price" name="price">
                </div>
                <div class="col-4  shadow-azure">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text"  class="form-control" id="series" name="series" required> 
                </div>
                <div class="col-6 shadow-azure">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text"  class="form-control" id="description" name="description">
                </div>
                <div class="col-6 shadow-azure">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="url"  class="form-control" id="thumb" name="thumb">
                </div>
                <div class="col-5 offset-1 shadow-azure">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text"  class="form-control" id="type" name="type">
                </div>
                <div class="col-5 shadow-azure">
                    <label for="sale_date" class="form-label">Anno di vendita</label>
                    <input type="text"  class="form-control" id="sale_date" name="sale_date" required>
                </div>
                <div class="col d-flex justify-content-center m-5 align-items-center">
                    <button type="reset" class="btn btn-danger m-5">Cancella</button>
                    <button type="submit" class="btn btn-primary m-5">Aggiungi</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection