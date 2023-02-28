<?php

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
Route::get('/',"App\Http\Controllers\FilmDevelopOrderController@index")->name('filmDevelopOrder.index');
Route::get('/form',"App\Http\Controllers\FilmDevelopOrderController@form")->name('filmDevelopOrder.form');
Route::post('/save',"App\Http\Controllers\FilmDevelopOrderController@save")->name('filmDevelopOrder.save');
Route::get('/list',"App\Http\Controllers\FilmDevelopOrderController@list")->name('filmDevelopOrder.list');
Route::get('/show/{id}',"App\Http\Controllers\FilmDevelopOrderController@show")->name('filmDevelopOrder.show');