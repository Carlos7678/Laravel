<!-- resources/views/logout.blade.php -->

@extends('plantilla')

@section('content')
    <h1>Cerrar Sesión</h1>

    <form method="GET" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
@endsection
