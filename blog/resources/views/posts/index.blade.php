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
                <h3>{{ $post->titulo }} (<em>{{ $post->usuario->username }}</em>)</h3>
                <button class="btn btn-warning" onclick="window.location='{{ route('posts.show', $post->id) }}'">Ver</button>
                <form method="POST" action="{{ route('posts.destroy', $post->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Borrar</button>
                </form>
                <!-- Formulario para editar -->
                <form method="POST" action="{{ route('posts.editarPrueba', $post->id) }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-success">Editar</button>
                </form>
            </div>
        @empty
            <p>No hay posts</p>
        @endforelse
    </div>
@endsection

