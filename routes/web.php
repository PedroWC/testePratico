<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Symfony\Component\HttpFoundation\Request;

// LARAVEL FORM TOKEN
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();

    $token = csrf_token();

    // ...
});

Route::get('/pessoas/create', 'PessoasController@create');
Route::post('/pessoas/create', 'PessoasController@store') -> name('cadastrar_pessoa');

Route::get('/pessoas/show', 'PessoasController@show');
Route::get('/pessoas/read', 'PessoasController@read') -> name('buscar_pessoas');