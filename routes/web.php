<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeaheadController;

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

Route::get('/home', [TypeaheadController::class, 'index']);
Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);
Route::get('/accueil', [TypeaheadController::class, 'accueil'])->name('accueil');
Route::post('/addcopros', [TypeaheadController::class, 'addcopros'])->name('addcopros');
Route::get('/listcopros', [TypeaheadController::class, 'ListCopros'])->name('listcopros');
Route::get('/detailcopro/{id}', [TypeaheadController::class, 'showCopro'])->name('detailcopro');


Route::get('/addcopros', function () {
    return view('ajoutercopro');
})->name('addcopros');
