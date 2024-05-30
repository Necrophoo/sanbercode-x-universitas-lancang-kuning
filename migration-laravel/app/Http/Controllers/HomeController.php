<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function master()
    {
        return view('layout.master', [
            'title' => 'Master Template',
            'name' => 'Master Template'
        ]);
    }
}
