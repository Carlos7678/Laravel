<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Esta función no se utiliza en este caso, redireccionamos a otra ruta
        return redirect()->route('inicio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Esta función no se utiliza en este caso, ya que no hay un formulario de creación de posts
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($postId=null)
    {
        // Esta función no se utiliza en este caso, redireccionamos a otra ruta
        return redirect()->route('inicio');
    }

    public function editGeneric()
    {
        // Esta función no se utiliza en este caso, redireccionamos a otra ruta
        return redirect()->route('inicio');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Esta función no se utiliza en este caso, ya que no hay un formulario de edición de posts
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

    /**
     * Crea un nuevo post de prueba.
     */
    public function nuevoPrueba()
    {
        $titulo = "Título " . rand();
        $contenido = "Contenido " . rand();
        Post::create([
            'titulo' => $titulo,
            'contenido' => $contenido
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Edita un post de prueba existente.
     */
    public function editarPrueba($id)
    {
        $titulo = "Título " . rand();
        $contenido = "Contenido " . rand();
        $post = Post::findOrFail($id);
        $post->titulo = $titulo;
        $post->contenido = $contenido;
        $post->save();
        return redirect()->route('posts.index');
    }
}
