<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\HistoricoController;
use Illuminate\Support\Facades\Cadastro;


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
    return view('pesquisa');
});

// Route::get('/historico', function (){
//     return view('historico');
// });

// Route::get('/pesquisa', function (){
//     return view('pesquisa');
// });

// Route::get('/cadastro', function (){
//     return view('cadastro');
// });

// Route::get('/login', function (){
//     return view('login');
// });

Route::get('/cadastro', [CadastroController::class, 'cadastro'])->name('cadastro'); //Comado de rota pesquisa para cadastro, finaliza no Controller. 
//
Route::get('/pesquisa', [PesquisaController::class, 'pesquisa'])->name('pesquisa');
//
Route::get('/historico', [HistoricoController::class, 'historico'])->name('historico');
//
Route::post('/cadastro', [CadastroController::class, 'store']);
//

