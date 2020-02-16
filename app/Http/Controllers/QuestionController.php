<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function loadView()
    {
        return view('you');
    }
    public function create()
    {
        return view('create');
    }


    public function saveData(Request $request)
    {
        $data = $request->all();
    }
}
