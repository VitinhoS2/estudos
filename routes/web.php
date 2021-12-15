<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstudosController;

Route::get('/',[EstudosController::class, 'index']);

Route::get('/registro',[EstudosController::class, 'registrocrtl']);
Route::post('/registro', [EstudosController::class, 'registrostore']);

Route::get('/upload',[EstudosController::class, 'uploadcrtl']);
Route::post('/upload',[EstudosController::class, 'uploadstore']); //pode possuir mesmo nome pq é um método diferente

Route::get('/perfil/{user_id}',[EstudosController::class, 'perfilshow']);

Route::get('/gerenciar', [EstudosController::class, 'gerenciarcrtl']); //dashboard

Route::get('/envios/edit/{id}', [EstudosController::class, 'edit']); //editar envio
Route::put('/envios/update/{id}', [EstudosController::class, 'update']); //atualizar os dados do envio

Route::get('/{disciplina}', [EstudosController::class, 'materia']);//mostrar envios filtrados por matéria

Route::get('/reportar/{id}', [EstudosController::class, 'reportar']);

Route::delete('/envios/{id}', [EstudosController::class, 'destroy']); //apagar envio

Route::get('/dashboard', [EstudosController::class, 'index'])->middleware('auth');
/*
Route::get('/teste',[EstudosController::class, 'testecrtl']);

Route::get('/teste/{id}', [EstudosController::class, 'testeidcrtl']);

Route::get('/autenticar',[EstudosController::class, 'autenticarcrtl']);

Route::get('/navega3', [EstudosController::class, 'navega3crtl']);

Route::get('/navega2', [EstudosController::class, 'navega2crtl']);

Route::get('/navega', [EstudosController::class, 'navegacrtl']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/dashboard');
})->name('dashboard');
*/