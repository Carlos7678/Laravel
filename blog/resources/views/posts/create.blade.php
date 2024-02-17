@extends('plantilla')

@section('titulo', 'Crear nuevo post')

@section('contenido')
    <h1>Crear nuevo post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" value="{{ old('titulo') }}">
            @error('titulo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <textarea class="form-control @error('contenido') is-invalid @enderror" id="contenido" name="contenido" rows="5">{{ old('contenido') }}</textarea>
            @error('contenido')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <input type="hidden" name="usuario_id" value="1"> <!-- Asignar usuario actual -->
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
