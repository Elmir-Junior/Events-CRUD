@extends('layouts.main')

@section('title', 'Deletar Evento')
@section('content')

@if($event != null)
    <p>Exibindo evento Id: {{$event->id}} </p> 
    <p>{{$event->title}}</p>
    <p>{{$event->description}}</p>
    @else
    <p>Id não informado
    @endif

@endsection