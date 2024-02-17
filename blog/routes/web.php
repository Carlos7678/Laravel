<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Helpers\DateHelper;

Route::get('/', function () {
    return view('posts.inicio', ['fechaActual' => DateHelper::fechaActual()]);
})->name('inicio');

Route::get('/posts', function () {
    return view('posts.listado');
})->name('posts_listado');

Route::get('/posts/{id}', function ($id) {
    return view('posts.show')->with(['id' => $id]);
})->where('id', '[0-9]+')->name('posts_ficha');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::post('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba'])->name('posts.nuevoPrueba');

Route::post('/posts/editar/{id}', [PostController::class, 'editarPrueba'])->name('posts.editarPrueba');

Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba']);

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('posts', PostController::class)->only(['index', 'show', 'create', 'edit']);



