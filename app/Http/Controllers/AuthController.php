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
    public function signIn($id){
      return response()->json(Auth::loginUsingId($id, true));
    }

    public function isUsernameUnique($username) {
        $user = User::where('username', '=', $username)->first();

        if ($user === null) {
          return response()->json(['is-username-unique' => true]);
        }
        return response()->json(['is-username-unique' => false]);
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

      $user = User::where('email', '=', $email)->get()->toArray();

      if($user === []){
          $data = [
            'is-new-user' => true,
          ];
      } else {
        $data = [
            'is-new-user' => false,
            'user' => $user,
        ];
      }

      return response()->json($data);
    }
}
