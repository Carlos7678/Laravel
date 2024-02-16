@extends('plantilla')

@section('titulo', 'Listado posts')

@section('contenido')
    <h1>Listado de posts</h1>
    <div>
        <!-- Botón para crear posts automáticos -->
        <form method="POST" action="{{ route('posts.nuevoPrueba') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Crear Posts Automáticos</button>
        </form>

        <!-- Listado de posts -->
        @foreach($posts as $post)
            <div>
                <h3>{{ $post->titulo }} (<em>{{ $post->usuario->login }}</em>) <button class="btn btn-warning" onclick="window.location='{{ route('posts.show', $post->id) }}'">Ver Detalles</button></h3>
            </div>
        @endforeach
    </div>
@endsection
