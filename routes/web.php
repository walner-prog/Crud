<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Seccion1;
use App\Http\Controllers\TurismoController;
//use App\Http\Livewire\Turismo\SitioTuristico;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/*
Route::get('/sitios-turisticos', SitioTuristico::class);
// routes/web.php

use App\Http\Controllers\Turismo\SitioTuristicoController;

Route::get('/turismo', [SitioTuristicoController::class, 'index']);


Route::get('/turismo', [TurismoController::class, 'index']);
Route::get('/cultura-tradicion', 'CulturaTradicion@index');
Route::get('/atracciones', 'Atraccion@index');
Route::get('/galeria-fotos', 'GaleriaFoto@index');
Route::get('/sitios-turisticos', 'SitioTuristico@index');
Route::get('/preguntas-frecuentes', 'PreguntaFrecuente@index');

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';

*/
