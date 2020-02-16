<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use  App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct() {

        $this->middleware('guest');

    }
    public function showLoginForm()
    {
        return view('login');
    }


    public function Login(LoginRequest $request)
    {
        try {
            $credentials = ['phone' => $request->phone, 'password' => $request->password];
         
            if ( Auth::attempt( $credentials) ) {
                
                return redirect()->route("home");
            }
            throw new \Exception("Login fails");
        } catch (\Exception $e) {
           throw $e;
            return redirect()->route("login");
        }
    }
}
