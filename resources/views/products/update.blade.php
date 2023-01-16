@extends('layouts.main')

@section('title', 'HDC Events')
@section('content')
<h1>Editar produto</h1>

    @if($id != null)
    <p>Exibindo produto Id: {{$id}}</p> 
    @else
    <p>Id não informado
    @endif

@endsection