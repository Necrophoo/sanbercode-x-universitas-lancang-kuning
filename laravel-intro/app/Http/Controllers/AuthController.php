<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return redirect()->route('welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }

    public function welcome(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');

        return view('welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }

}
