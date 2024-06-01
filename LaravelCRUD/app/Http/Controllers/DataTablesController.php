<?php

namespace App\Http\Controllers;

class DataTablesController extends Controller
{
    public function datatables()
    {
        return view('data-tables', [
            'title' => 'Databales',
            'name' => 'Data Tables',
        ]);
    }
}
