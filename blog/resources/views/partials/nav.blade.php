
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('inicio') }}">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Listado de posts</a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">Crear post</a>
            </li>
            @endauth
        </ul>
        <ul class="navbar-nav ml-auto">
            @guest
            <!-- Mostrar la opción de login solo si el usuario no está autenticado -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @else
            <!-- Mostrar la opción de logout solo si el usuario está autenticado -->
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link">Logout</button>
                </form>
            </li>
            @endguest
        </ul>
    </div>
</nav>

