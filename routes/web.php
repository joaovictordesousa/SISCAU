<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\HistoricoController;
use App\Models\AuxTipoRecolhimento;


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

Route::get('/', [PesquisaController::class, 'pesquisa'])->name('pesquisa');
Route::get('/pesquisa', [PesquisaController::class, 'pesquisa'])->name('pesquisa');
Route::get('/historico', [HistoricoController::class, 'historico'])->name('ResultadoHistorico');
Route::get('/cadastro', [CadastroController::class, 'RenderCadastroView'])->name('NovaGuia');

Route::post('/historico', [PesquisaController::class, 'historico'])->name('filtrar');
Route::post('/cadastro', [CadastroController::class, 'Cadastrar'])->name('NovaGuia');

Route::delete('/delete', [HistoricoController::class, 'delete'])->name('deletar.dados');

