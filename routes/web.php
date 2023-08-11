<?php

use App\Http\Controllers\PrincipalController;
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

Route::get('/', [PrincipalController::class, 'index'])->name('pesquisa');
Route::get('/principal', [PrincipalController::class, 'index'])->name('pesquisa');
Route::get('/principal/create', [PrincipalController::class, 'create'])->name('NovaGuia');
Route::post('/principal', [PrincipalController::class, 'store'])->name('principal.store');
Route::get('/principal/historico', [PrincipalController::class, 'filtrar'])->name('principal_historico');
Route::post('/principal/historico', [PrincipalController::class, 'filtrar'])->name('principal.historico');
route::get('/principal/{GuiasRecolhimento}/edit', [PrincipalController::class, 'edit'])->name('editardados');
route::put('/principal/{GuiasRecolhimento}', [PrincipalController::class, 'update'])->name('principal.update');
route::get('/principal/{GuiasRecolhimento}/show', [PrincipalController::class, 'show'])->name('principal.show');
route::delete('/principal/{GuiasRecolhimento}', [PrincipalController::class, 'destroy'])->name('principal.destroy');
// route::get('/principal/{GuiasRecolhimento}/confirmdestroy', [PrincipalController::class, 'confirmdestroy'])->name('principal.confirmdestroy');
route::get('/principal/{GuiasRecolhimento}/mostrarcadastro', [PrincipalController::class, 'mostrarcadastro'])->name('principal.mostrarcadastro');


