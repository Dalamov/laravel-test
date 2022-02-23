<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends BaseController
{

  public function signin()
  {
    if (Auth::attempt(['email' =>  request('email'), 'password' =>  request('password')])) {
      $authenticated_user = Auth::user();
      $user = User::find($authenticated_user->id);
      $success['token'] = $user->createToken('myApp')->plainTextToken;
      $success['name'] =  $user->name;
      return $this->sendResponse($success, 'User signed in');
    }
    return header("Location: /home");
  }


  public function show($id)
  {
    $user = User::find($id);
    if (is_null($user)) {
      return $this->sendError('user does not exist.');
    }
    return $user;
  }

  public function signup(Request $request)
  {

    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $user = User::create($input);
    $success['remember_token'] =  $user->createToken('MyAuthApp')->plainTextToken;
    $success['name'] =  $user->name;
    return header("Location: /loginPage");
  }



  public function logout(Request $request) {
    Auth::logout();
    return header("Location: /loginPage");
}
}
