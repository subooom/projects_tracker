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

// Our main route for the vue app, if you go to vue.blade.php you will see a div with id of #app, vue works like react.
Route::get('/', function(){
  return view('paradiseinself');
});


// We will modify the following routes bistari, ahile chai /old-app ma gais bhaney puranai app aaucha
Route::get('/old-app','ProjectController@index');
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







// REST API

// Route::prefix('api') leh tes vitra vako sab routes ko agadi /api/ haldincha

Route::prefix('api')->group(function (){
    // API Documentation Page
    Route::get('/', 'PagesController@api');

    // Auth endpoints
    Route::prefix('auth')->group(function (){

      Route::get('sign-in','AuthController@signIn');
      Route::get('is-logged-in','AuthController@isLoggedIn');
      Route::get('is-new-user/{email}','AuthController@isNewUser');

    });


    // User endpoints

    Route::prefix('users')->group(function (){

      Route::get('fetch-all','UserController@index');

    });

    // Projects endpoints

    Route::prefix('projects')->group(function (){

      Route::get('fetch-all','ProjectController@fetchAll');

      Route::get('fetch/{slug}','ProjectController@fetch');

      Route::post('store','ProjectController@store');

      Route::post('update/{slug}','ProjectController@update');

      Route::delete('delete/{slug}','ProjectController@destroy');

    });
});

?>


