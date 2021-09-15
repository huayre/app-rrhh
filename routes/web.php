<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('inicio', function () {
    return view('plantilla.index');
});
Route::get('empleado', [PersonaController::class, 'listaEmpleados'])->name('empleado');
Route::post('empleado', [PersonaController::class, 'crearEmpleado'])->name('empleado');
Route::delete('empleado/{id}', [PersonaController::class, 'eliminarEmpleado'])->name('empleado');
