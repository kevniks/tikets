<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login ()
    {
        return "succes";
    }
    public function authenticate(Request $request )
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt($request->only('email','password'))){
            return "succes1";
        }
        return redirect()->back()->withErrors('les identifiants ne correspondes pas.');
    }
    public function logout()
    {

    }
}
