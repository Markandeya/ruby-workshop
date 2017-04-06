<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        Mail::send('mail', ['body' => $request->message, 'from' => $request->email,
         'name' => $request->name], function ($m) {
            $m->to('amritaphysicaldepartment@gmail.com', 'TEST')->subject('Ruby On Rails')->
            from('Contact@ror2017.com', 'Guest');
        });

        Session::flash('success', 'Sent message successfully!');
        return redirect()->route('home');
    }
}
