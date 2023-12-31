<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VendaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index'); 
}); 

Route::prefix('produtos')->group(function(){
    Route::get('/', [ProdutosController::class, 'index'])->name('produtos.index'); 
    // cadastrar produtos
    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    // atualizar produtos
    Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');
    Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');

    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete'); 
});

Route::prefix('clientes')->group(function(){
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index'); 
    // cadastrar produtos
    Route::get('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');
    Route::post('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');
    // atualizar produtos
    Route::get('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');
    Route::put('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');

    Route::delete('/delete', [ClientesController::class, 'delete'])->name('cliente.delete'); 
}); 

Route::prefix('vendas')->group(function(){
    Route::get('/', [VendaController::class, 'index'])->name('vendas.index'); 
    // cadastrar produtos
    Route::get('/cadastrarVenda', [VendaController::class, 'cadastrarVenda'])->name('cadastrar.venda');
    Route::get('/enviaComprovantePorEmail/{id}', [VendaController::class, 'enviaComprovantePorEmail'])->name('enviaComprovantePorEmail.venda');    
    Route::post('/cadastrarVenda', [VendaController::class, 'cadastrarVenda'])->name('cadastrar.venda');
}); 

Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuariosController::class, 'index'])->name('usuarios.index'); 
    // cadastrar usuario
    Route::get('/cadastrarUsuario', [UsuariosController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');
    Route::post('/cadastrarUsuario', [UsuariosController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');
    // atualizar usuario
    Route::get('/atualizarUsuario/{id}', [UsuariosController::class, 'atualizarUsuario'])->name('atualizar.usuario');
    Route::put('/atualizarUsuario/{id}', [UsuariosController::class, 'atualizarUsuario'])->name('atualizar.usuario');

    Route::delete('/delete', [UsuariosController::class, 'delete'])->name('usuario.delete'); 
});
