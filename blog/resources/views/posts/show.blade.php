@extends('plantilla')


@section('titulo', 'Ficha del post $id')


@section('contenido')
<h1>Detalles del Post {{ $id }}</h1>
<p>{{ $post->contenido }}</p>

@endsection

