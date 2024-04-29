<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\visitante;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('consulta.visitante');
});

Route::get('/Login/{erro?}', [LoginController::class, 'index'])->name('login');

Route::post('/Login/logar', [LoginController::class, 'autenticar'])->name('login.logar');

Route::get('/Login/logout', [LoginController::class, 'destroy']);

Route::get('/Consulta', [ConsultaController::class, 'index']);

Route::get('/Cadastrar', [ConsultaController::class, 'create']);

Route::post('/Cadastrar/salvar', [ConsultaController::class, 'store']);

Route::get('/editar/{material}', [ConsultaController::class, 'edit'])->name('editar.material');

Route::put('/editar/salvar/{material}', [ConsultaController::class, 'update'])->name('editar.salvar');

Route::delete('/deletar/{material}', [ConsultaController::class, 'destroy'])->name('editar.deletar');

Route::get('/Consulta/visitante', [visitante::class, 'index'])->name('consulta.visitante');