<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AuthController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function signup(Request $request){

        try {
            $user_validation = $request->validate([
                'name' => 'required | min:3',
               'email'=> 'required | email | unique:users',
               'password' => 'required | min:6 '
              
           ],[
            'name.required' => 'Please enter a username.',
            'name.min' => 'Username must be at least 3 characters long.',
            'name.unique' => 'Username is already taken.',
            'email.required' => 'Please enter an email address.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email address is already registered.',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Password must be at least 6 characters long.',
        ]);
       // return dd($user_validation); 
       User::create($user_validation);
       return redirect('/login')->with('msg', 'registration successful'); // Redirect to a login page
        } catch (Throwable $th) {
            return back()->withErrors();

        }
  

    }
    public function login(Request $request){

        $user_credentials = $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if(Auth::attempt($user_credentials)){
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with(['msg' => 'Check email and Password if they are correct']);
        }
    }
    public function logout()
{
    Auth::logout();

    return redirect('/login'); // Redirect to the desired URL after logout
}
public function dashboard()
{
    if (Auth::check()) {
        // Get the authenticated user's details
        $user = Auth::user();

        // Pass the user data to the dashboard view
        return View::make('dashboard', ['user' => $user]);
    } else {
        // Redirect to the login page if the user is not authenticated
        return redirect('/login');
    }
}
}    




