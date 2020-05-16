<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','ProjectController@index');
Route::get('/about','PagesController@about');
Route::get('/create-project','ProjectController@create');
Route::post('/store','ProjectController@store');
Route::get('/edit','ProjectController@edit');

Route::post('/delete/{id}','ProjectController@destroy');

Route::get('/{slug}/details','ProjectShowController@details');   
Route::get('/{slug}/task','ProjectShowController@task');
Route::get('/{slug}/erd','ProjectShowController@erd');
Route::get('/{slug}/progress','ProjectShowController@progress');
Route::get('/{slug}/settings','ProjectShowController@settings');
Route::get('/{slug}/vision','ProjectShowController@vision');


?>


