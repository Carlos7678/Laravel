<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostControllerApi extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts, 200);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post, 200);
    }

    public function store(PostRequest $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validated();
        
        // Crear un nuevo post con los datos del formulario y el usuario recibido
        $post = new Post();
        $post->titulo = $validatedData['titulo'];
        $post->contenido = $validatedData['contenido'];
        $post->user_id = $request->user_id; // Asignar el ID del usuario recibido
        $post->save();
    
        // Retornar el post creado en formato JSON con el código de estado 201 (created)
        return response()->json($post, 201);
    }
    

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->save();
        return response()->json($post, 200);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(null, 204);
    }
}
