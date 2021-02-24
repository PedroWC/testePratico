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
use App\Services\PessoasService;
use App\Http\Controllers\PessoasController;

// READ
Route::get('/', 'PessoasController@show') -> name('tela_inicial');


// CREATE
Route::get('/create', 'PessoasController@create');
Route::post('/create', function(PessoasService $service, PessoasController $redirecionar){
    // Array shift vai retirar o token do laravel para nao entrar no cadastro da api
    array_shift($_POST);
    $service -> store($_POST);
}) -> name('cadastrar_pessoa');


// UPDATE
Route::get('/update/{id}', 'PessoasController@edit');
Route::post('/update/{id}', function(PessoasService $service, PessoasController $redirecionar, $id){
    $service -> update($_POST, $id);
}) -> name('editar_pessoa');


// DELETE
Route::get('/delete/{id}', function(PessoasService $service, PessoasController $redirecionar, $id){
    $service -> destroy($id);
}) -> name('deletar_pessoa');