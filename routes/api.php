<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\TarefaController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/listarTarefas',[TarefaController::class, 'listarTarefas']);

Route::get('/listarTarefa/{id}',[TarefaController::class, 'listarTarefa']);

Route::post('/adicionarTarefa',[TarefaController::class, 'adicionarTarefa']);

Route::put('/atualizarTarefa/{id}',[TarefaController::class, 'atualizarTarefa']);

Route::delete('/deletarTarefa/{id}',[TarefaController::class, 'deletarTarefa']);