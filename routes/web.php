<?php

use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;

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

Route::resource('cars', App\Http\Controllers\CarController::class);

// * index visualizzazione della lista
// * show visualizzazione di un singolo record
// * create visualizzare il form di creazione
// store ricevere i dati sottoscritti tramite il form di creazione
// * edit visualizzare il form di modifica
// update ricevere i dati sottoscritti dal form di modifica
// * destroy ricevere i dati sottoscritti dal bottone di cancellazione
