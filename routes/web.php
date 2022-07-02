<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/login');
})->name('home');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLogin'])->name('login');
Route::post('/login/check', [App\Http\Controllers\LoginController::class, 'check'])->name('login.check');

Route::get('/menu', [App\Http\Controllers\MenuController::class, 'showMenu'])->name('menu');

Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'showUsuario'])->name('usuario');
Route::post('/usuario/create', [App\Http\Controllers\UsuarioController::class, 'createUsuario'])->name('usuario.create');
Route::get('/usuario/edit/{id}', [App\Http\Controllers\UsuarioController::class, 'editUsuario'])->name('usuario.edit');
Route::put('/usuario/update', [App\Http\Controllers\UsuarioController::class, 'updateUsuario'])->name('usuario.update');
Route::delete('/usuario/delete', [App\Http\Controllers\UsuarioController::class, 'deleteUsuario'])->name('usuario.delete');

Route::get('/produto', [App\Http\Controllers\ProdutoController::class, 'showProduto'])->name('produto');
Route::post('/produto/create', [App\Http\Controllers\ProdutoController::class, 'createProduto'])->name('produto.create');
Route::get('/produto/edit/{id}', [App\Http\Controllers\ProdutoController::class, 'editProduto'])->name('produto.edit');
Route::put('/produto/update', [App\Http\Controllers\ProdutoController::class, 'updateProduto'])->name('produto.update');
Route::delete('/produto/delete', [App\Http\Controllers\ProdutoController::class, 'deleteProduto'])->name('produto.delete');

Route::get('/pedido', [App\Http\Controllers\PedidoController::class, 'showPedido'])->name('pedido');
Route::post('/pedido/create', [App\Http\Controllers\PedidoController::class, 'createPedido'])->name('pedido.create');
Route::get('/pedido/edit/{id}', [App\Http\Controllers\PedidoController::class, 'editPedido'])->name('pedido.edit');
Route::put('/pedido/update', [App\Http\Controllers\PedidoController::class, 'updatePedido'])->name('pedido.update');
Route::delete('/pedido/delete', [App\Http\Controllers\PedidoController::class, 'deletePedido'])->name('pedido.delete');

Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'showCliente'])->name('cliente');
Route::post('/cliente/create', [App\Http\Controllers\ClienteController::class, 'createCliente'])->name('cliente.create');
Route::get('/cliente/edit/{id}', [App\Http\Controllers\ClienteController::class, 'editCliente'])->name('cliente.edit');
Route::put('/cliente/update', [App\Http\Controllers\ClienteController::class, 'updateCliente'])->name('cliente.update');
Route::delete('/cliente/delete', [App\Http\Controllers\ClienteController::class, 'deleteCliente'])->name('cliente.delete');

