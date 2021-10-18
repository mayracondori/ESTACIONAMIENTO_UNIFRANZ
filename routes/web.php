<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\gerenteController;
use App\Http\Controllers\PlantillaController;

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


Route::get('/', HomeController::class,'index')->name('index');

Route::get('layouts', [PlantillaController::class, 'index'])->name('layouts.index');
Route::get('layouts/plantilla', [PlantillaController::class, 'plantilla']);
Route::get('layouts/plantillainicio', [PlantillaController::class, 'plantillainicio']);

Route::get('layouts/plantillaadmin', [PlantillaController::class, 'plantillaadmin']);
Route::get('layouts/plantillausuario', [PlantillaController::class, 'plantillausuario']);
Route::get('layouts/cerrarsesion', [PlantillaController::class, 'cerrarsesion'])->name('layouts/cerrarsesion');


Route::get('usuario', [UsuarioController::class, 'index'])->name('index');
Route::get('usuario/usuarios', [UsuarioController::class, 'listausuarios'])->name('usuario.usuarios');
Route::get('usuario/horarios', [UsuarioController::class, 'listahorarios']);
Route::get('usuario/registro', [UsuarioController::class, 'registro'])->name('registro');
Route::post('usuario/completaregistro', [UsuarioController::class, 'completaregistro'])->name('completaregistro');
Route::POST('usuario/modifpreguntas', [UsuarioController::class, 'modifpreguntas'])->name('modifpreguntas');

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
