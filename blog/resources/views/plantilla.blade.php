<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Blog')</title>
</head>
<body>
    @include('partials.nav')

    <div>
        <h1>@yield('contenido')</h1>
    </div>
</body>
</html>
