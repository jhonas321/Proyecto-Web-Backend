<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\EleccionController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\FrenteController;
use App\Http\Controllers\Relacion_ELECCFRENTEController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Models\Candidato;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/**
 * Al crear un tipo grupo se realiza un conjunto de rutas pero estas funcionan independientemente
 * en consola para mejor vision colocar: php artisan route:list
 */

 use App\Http\Controllers\BoletasController;

Route::get('/generar-boleta', [BoletasController::class, 'generarBoleta']);



/**
 * Obtiene los candidatos todos por completo: get
 * Inserta un nuevo candidato: store
 * 
 * Para ver mejor la sintaxis ingresar a: CandidatoController.php
 */
Route::controller(CandidatoController::class)->group(
    function(){
        Route::get('/candidatos', 'index');
        Route::post('/postcandidato', 'store');
    }
);
/**
 * Obtiene todas las carreras
 */
Route::get('/carreras', [CarreraController::class, 'index']);
/**
 * Obtiene las convocatorias todas por completo: get
 * Inserta una nueva convocatoria: store
 * 
 * Para ver mejor la sintaxis ingresar a: ConvocatoriaController.php
 */
Route::controller(ConvocatoriaController::class)->group(
    function(){
        Route::get('/convocatorias', 'index');
        Route::post('/postconvocatorias', 'store');
    }
);
/**
 * Obtiene las elecciones todas por completo: get
 * Inserta una nueva eleccion: store
 * 
 * Para ver mejor la sintaxis ingresar a: EleccionController.php
 */
Route::controller(EleccionController::class)->group(
    function(){
        Route::get('/elecciones', 'index');
        Route::post('/posteleccion', 'store');
    }
);
/**
 * Obtiene las facultades todas por completo: get
 * 
 * Para ver mejor la sintaxis ingresar a: FacultadController.php
 */
Route::get('/facultades', [FacultadController::class, 'index']);
/**
 * Obtiene los frentes todas por completo: get
 * Inserta un nuevo frente: store
 * 
 * Para ver mejor la sintaxis ingresar a: FrenteController.php
 */
Route::controller(FrenteController::class)->group(
    function(){
        Route::get('/frentes', 'index');
        Route::post('/postfrente', 'store');
    }
);
/**
 * Inserta una nueva convocatoria: store
 * 
 * Para ver mejor la sintaxis ingresar a: ConvocatoriaController.php
 */
Route::controller(Relacion_ELECCFRENTEController::class)->group(
    function(){
        Route::post('/postrelacion_elecc_frente', 'store');
    }
);
/**
 * Obtiene los usuarios todos por completo: get
 * Busca un usuario por id: show
 * 
 * Para ver mejor la sintaxis ingresar a: UsuarioController.php
 */
Route::controller(UsuariosController::class)->group(
    function(){
        Route::get('/usuarios', 'index');
        Route::put('/putusuario', 'show');
    }
);