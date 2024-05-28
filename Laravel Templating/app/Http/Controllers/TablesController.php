<?php

namespace App\Http\Controllers;

class TablesController extends Controller
{
    public function table()
    {
        return view('tables',[
        'title' => 'Master Template',
            'name' => 'Master Template']);
    }
}
