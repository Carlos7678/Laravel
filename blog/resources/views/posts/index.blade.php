@extends('plantilla')


@section('titulo', 'Listado posts')


@section('contenido')
    <h1>Listado de posts</h1>
    @foreach($posts as $post)
    <div>
        <h3>{{ $post->titulo }} (<em>{{ $post->usuario->login }}</em>)</h3>
        <p>{{ $post->contenido }}</p>
    </div>
@endforeach
@endsection







