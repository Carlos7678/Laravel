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
        @forelse($posts as $post)
            <div>
                <h3>{{ $post->titulo }} (<em>{{ $post->usuario->login }}</em>)
                    <button class="btn btn-warning" onclick="window.location='{{ route('posts.show', $post->id) }}'">Ver</button>
                    <form method="POST" action="{{route('posts.destroy', $post->id)}}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="window.location='{{ route('posts.destroy', $post->id) }}'">Borrar</button>
                    </form>
            </div>
        @empty
            <p>No hay posts</p>
        @endforelse
    </div>
@endsection


