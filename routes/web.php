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



Route::get('/', 'PagesController@index');
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

Route::prefix('api')->group(function (){

    Route::get('get-cross-ref-token', function(){
        return response()->json(csrf_token());
    });

    // Auth endpoints
    Route::prefix('auth')->group(function ()
    {
      Route::get('sign-in/{id}','AuthController@signIn');
      Route::get('is-username-unique/{username}','AuthController@isUsernameUnique');
      Route::get('is-logged-in','AuthController@isLoggedIn');
      Route::get('is-new-user/{email}','AuthController@isNewUser');
    });


    // User endpoints

    Route::prefix('users')->group(function ()
    {
      Route::post('store','UserController@store');
      Route::get('fetch-all','UserController@index');
    });
});

?>
