<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Session;

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
            'rollno' => ['required','max:255','Regex:/^am\.((ar)|en)\.[a-z 0-9]*$/i'],
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits:10',
            'batch' => 'required|max:10',
            'semester' => 'required|max:10'
        ]);

        $registration = new Registration;
        $registration->name = $request->name;
        $registration->rollno = strtolower($request->rollno);
        $registration->email = $request->email;
        $registration->phone = $request->phone;
        $registration->batch = $request->batch;
        $registration->semester = $request->semester;
        $registration->save();

        Session::flash('success', 'Registration was successful!');
        return redirect()->route('home');
    }
}
