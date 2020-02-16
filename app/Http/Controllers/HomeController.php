<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
