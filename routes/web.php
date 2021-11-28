<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\PlatosController;



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
Route::get('inicio', [InicioController::class, 'inicio'])->name('inicio');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'authenticate'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('empleado', [PersonaController::class, 'listaEmpleados'])->name('empleado');
Route::post('empleado', [PersonaController::class, 'crearEmpleado'])->name('empleado');
Route::delete('empleado/{id}', [PersonaController::class, 'eliminarEmpleado'])->name('empleado');

Route::get('vacante', [VacanteController::class, 'listaVacantes'])->name('vacante');
Route::post('vacante', [VacanteController::class, 'crearVacante'])->name('vacante');
Route::delete('vacante/{id}', [VacanteController::class, 'eliminarVacante'])->name('vacantes');

Route::get('funciones', [FuncionController::class, 'listaFunciones'])->name('funcion');
Route::post('funciones', [FuncionController::class, 'crearFuncion'])->name('funcion');
Route::delete('funciones/{id}', [FuncionController::class, 'eliminarFuncion'])->name('funciones');

Route::get('areas', [AreaController::class, 'listaAreas'])->name('areas');
Route::post('areas', [AreaController::class, 'crearArea'])->name('areas');
Route::delete('areas/{id}', [AreaController::class, 'eliminarArea'])->name('areass');

Route::get('postulante', [PersonaController::class, 'listarPostulante'])->name('postulante');
Route::post('postulante', [PersonaController::class, 'crearPostulante'])->name('postulante');
Route::get('postulante/{id}', [PersonaController::class, 'aprobarPostulante']);

Route::get('chamba', [VacanteController::class, 'listaVacantesTrabajo'])->name('chamba');

Route::get('asistencia', [AsistenciaController::class, 'listaAsistencia'])->name('asistencia');
Route::post('asistencia', [AsistenciaController::class, 'crearAsistencia'])->name('asistencia.create');
Route::get('reporte', [AsistenciaController::class, 'reporteAsistencia'])->name('reporte');

Route::get('comelona', [PlatosController::class, 'paginaWeb'])->name('comelona');
Route::get('platos', [PlatosController::class, 'listaPlatos'])->name('platos');
Route::post('platos', [PlatosController::class, 'crearPlato'])->name('platos');

Route::delete('platos/{id}', [PlatosController::class, 'eliminarPlato'])->name('platoss');

Route::get('cliente', [PersonaController::class, 'listarCliente'])->name('cliente');
Route::post('cliente', [PersonaController::class, 'crearCliente'])->name('cliente');
Route::delete('cliente/{id}', [PersonaController::class, 'eliminarCliente'])->name('cliente');
