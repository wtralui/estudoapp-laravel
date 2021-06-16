<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato']);
Route::get('/quemsomos', [App\Http\Controllers\QuemSomosController::class, 'quemsomos']);
Route::get('/galeria', [App\Http\Controllers\GaleriaController::class, 'galeria']);
Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produtos']);
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes']);
Route::get('/carrinho', [App\Http\Controllers\CarrinhoController::class, 'carrinho']);

?>