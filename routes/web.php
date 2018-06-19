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

Route::post('/games/edit/{id}', 'GamesController@edit');

Route::post('/games/remove/{id}', 'GamesController@remove');

Route::get('/games/new', 'GamesController@display');

Route::post('/games/save', 'GamesController@store');

Route::get('/games/{id}/reviews', 'ReviewController@getGameReviews');