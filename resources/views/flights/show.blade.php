@extends('layout')
@section('content')
    @if ($flight->name)
        <h1>Repülőgép neve: {{$flight->name}}</h1>
    @endif

    <p>Száma: {{$flight->number}}</p>
    <p>Ára: {{$flight->price}}</p>
@endsection
