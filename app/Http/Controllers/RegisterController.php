<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'rollno' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits:10',
            'batch' => 'required|max:10',
            'semester' => 'required|max:10'
        ]);


    }
}
