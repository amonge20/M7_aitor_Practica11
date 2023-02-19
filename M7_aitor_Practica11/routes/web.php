<?php

use App\Http\Controllers\ControladorEjercicio1;
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

/*Route::get('/', function () {
    return 'welcome';
});*/
Route::get('/', [ControladorEjercicio1::class, 'arrel']);
Route::get('/ejercicio1', [ControladorEjercicio1::class,'ej1Parametro']);

