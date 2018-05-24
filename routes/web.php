<?php

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

use App\Game;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', 'GamesController@show' );

Route::get('/games/{id}', 'GamesController@fetch');

Route::get('/games/edit/{id}', 'GamesController@edit');
