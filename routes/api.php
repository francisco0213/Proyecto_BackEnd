<?php

use App\Http\Controllers\ContactosFormularioController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('testing',function(){
    return 'esta es mi prueba';
});

Route::post('add-roles',[RolesController::class,'adding']);

Route::put('update-roles',[RolesController::class,'updating']);

Route::delete('delete-roles',[RolesController::class,'deleting']);

Route::get('read-roles',[RolesController::class,'reading']);

Route::post('add-usuarios',[UsuariosController::class,'adding']);

Route::put('update-usuarios',[UsuariosController::class,'updating']);

Route::delete('delete-usuarios',[UsuariosController::class,'deleting']);

Route::get('read-usuarios',[UsuariosController::class,'reading']);

Route::post('add-contactos',[ContactosFormularioController::class,'adding']);