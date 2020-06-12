<?php

namespace App\Http\Controllers;

use App\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Resources\Auth as AuthResource;

class AuthController extends Controller
{
  /**
   * SignIn for checking signin in the user.
   *
   * @return boolean
   */
    public function signIn($request){
      dd($request);
    }

    /**
     * IsLoggedIn for checking if the user is logged in or not.
     *
     * @return boolean
     */

    public function isLoggedIn(){
      $isLoggedIn = Auth::check();
      $headers = [
        'method' => 'GET',
        'message' => 'User is '. $isLoggedIn ? 'logged in!':'not logged in',
        'code' => 200
      ];
      $data = [
        'is-logged-in' => $isLoggedIn
      ];

      return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function isNewUser($email){

      $headers = [
        'method' => 'GET',
        'message' => 'All users fetched!',
        'code' => 200
      ];
      $data = [
        'is-new-user' => User::where('email', '=', $email)->get()->toArray() === []
      ];

      return response()->json($data);
    }
}
