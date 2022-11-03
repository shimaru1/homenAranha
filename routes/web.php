<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;


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
/* 
Route::get('/', [HomeController::class, 'MostrarHome'])->name('home');

Route::get('/editar-usuario', [UsuarioController::class, 'MostrarEditarUsuario'])->name('editar-usuario');
Route::get('/cadastrar-usuario', [UsuarioController::class, 'FormularioCadastro'])->name('cadastrar-usuario');
Route::post('/cadastrar-usuario', [UsuarioController::class, 'SalvarBanco'])->name('salvar-banco');
//deletar

Route::delete('/editar-usuario/{registrosUsuarios}', [UsuarioController::class, 'ApagarBancoUsuario'])->name('apagar-usuario');

//alterar caminhao

Route::get('/alterar-usuario/{registrosUsuarios}', [UsuarioController::class, 'MostrarAlterarUsuario'])->name('alterar-usuario');
Route::put('/editar-usuario/{registrosUsuarios}', [UsuarioController::class, 'AlterarBancoUsuario'])->name('alterar-banco-usuario');
*/

Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editar-usuario',[UsuarioController::class,'MostrarEditarUsuario'])->name('editar-usuario');
Route::get('/cadastrar-usuario',[UsuarioController::class,'FormularioCadastro'])->name('cadastrar-usuario');
Route::post('/cadastrar-usuario',[UsuarioController::class,'SalvarBanco'])->name('salvar-banco');
//deletar

Route::delete('/editar-usuario/{registrosUsuarios}',[UsuarioController::class,'ApagarBancoUsuario'])->name('apagar-usuario');
//alterar caminhao
Route::get('/alterar-usuario/{registrosUsuarios}',[UsuarioController::class,'MostrarAlterarUsuario'])->name('alterar-Usuario');
Route::put('/editar-usuario/{registrosUsuarios}',[UsuarioController::class,'AlterarBancoUsuario'])->name('alterar-banco-usuario');