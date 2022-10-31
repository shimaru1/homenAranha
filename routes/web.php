<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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

Route::get('/',[HomeController::class,'MostrarHome'])->name('home');

Route::get('/editar-usuario',[cadastroController::class,'MostrarEditarUsuario'])->name('editar-usuario');
Route::get('/cadastrar-usuario',[cadastroController::class,'FormularioCadastro'])->name('cadastrar-usuario');
Route::post('/cadastrar-usuario',[cadastroController::class,'SalvarBanco'])->name('salvar-banco');

//deletar

Route::delete('/editar-usuario/{registrosUsuarios}',[cadastroController::class,'ApagarBancoUsuario'])->name('apagar-usuario');

//alterar caminhao

Route::get('/alterar-usuario/{registrosUsuarios}',[cadastroController::class,'MostrarAlterarUsuario'])->name('alterar-usuario');
Route::put('/editar-usuario/{registrosUsuarios}',[cadastroController::class,'AlterarBancoUsuario'])->name('alterar-banco-usuario');
