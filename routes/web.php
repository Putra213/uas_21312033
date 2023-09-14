<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NpmController;
use App\Http\Controllers\UasController;
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
Route::get('/npm', 'NpmController@index');
Route::get('/npm/create', 'NpmController@create');
Route::post('/npm', 'NpmController@store');
Route::get('/npm/{id}/edit', 'NpmController@edit');
Route::put('/npm/{id}', 'NpmController@update');
Route::delete('/npm/{id}', 'NpmController@destroy');

