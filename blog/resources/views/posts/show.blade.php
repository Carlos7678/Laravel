@extends('plantilla')


@section('titulo', 'Ficha del post $id')


@section('contenido')
<h1>Detalles del Post {{ $id }}</h1>
<p>{{ $post->contenido }}</p>
<form method="POST" action="{{ route('posts.destroy', $post->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Borrar</button>
                </form>

@endsection

