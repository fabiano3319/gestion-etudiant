<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('etudiants', EtudiantController::class);
Route::resource('classes', ClasseController::class)
    ->except('show')
    ->parameters(['classes' => 'classe']);