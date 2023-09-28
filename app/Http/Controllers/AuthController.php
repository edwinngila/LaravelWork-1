<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AuthController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function signup(Request $request){

        $user_validation = $request->validate([
             'name' => 'required | min:3',
            'email'=> 'required | email',
            'password' => 'required | min:6 '
           
        ]);
    // return dd($user_validation); 
    User::create($user_validation);
    return redirect('/login')->with('msg', 'registration successful');
  

    }

}
// public function login(){

// }
