@extends('layouts.main')
@section('title',' Indice')
@section('content')
@forelse ($comics as $comic)
<ul>
    <li>{{$comic->title}}</li>
    <li>{{$comic->description}}</li>
    <li><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></li>
    <li>{{$comic->price}}€</li>
    <li>{{$comic->series}}</li>
    <li>{{$comic->sale_date}}</li>
    <li>{{$comic->type}}</li></ul>
@empty
    <p>Non c'è alcun fumetto .</p>
@endforelse

@endsection
