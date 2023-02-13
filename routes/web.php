<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeaheadController;
use App\Http\Controllers\PdfGeneratorController;



Route::get('/home', [TypeaheadController::class, 'index']);
Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);
Route::get('/accueil', [TypeaheadController::class, 'accueil'])->name('accueil');
Route::post('/addcopros', [TypeaheadController::class, 'addcopros'])->name('addcopros');
Route::get('/listcopros', [TypeaheadController::class, 'ListCopros'])->name('listcopros');
Route::get('/detailcopro/{id}', [TypeaheadController::class, 'showCopro'])->name('detailcopro');


Route::get('/resume', [PdfGeneratorController::class, 'index']);

Route::get('/addcopros', function () {
    return view('ajoutercopro');
})->name('addcopros');
