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
    return view('posts.ficha')->with(['id' => $id]);
})->where('id', '[0-9]+')->name('posts_ficha');



Route::resource('posts', PostController::class)->only([
    'index', 'show', 'create', 'edit'
]);

Route::get('/posts/nuevoPrueba', 'App\Http\Controllers\PostController@nuevoPrueba');
Route::get('/posts/editarPrueba/{id}', 'App\Http\Controllers\PostController@editarPrueba');
