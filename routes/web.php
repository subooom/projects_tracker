<?php

use App\Http\Controllers\PagesController;
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



// REST API

Route::prefix('api')->group(function (){

    Route::get('/', 'PagesController@api');
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
