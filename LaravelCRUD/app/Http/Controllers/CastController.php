<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $cast = DB::table('cast')->get();
        return view('cast.index', [
            'cast' => $cast,
            'title' => 'Data cast',
            'name' => 'Data cast'
        ]);
    }

    public function create()
    {
        return view('cast.create', [
            'title' => ' Tambah Cast',
            'name' => 'Tambah Cast'
        ]);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',

        ]);

        $query = DB::table('cast')->insert([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' => $request['bio'],
            'created_at' => now(),
        ]);

        return redirect('/cast')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($cast_id)
    {
        $cast = DB::table('cast')->find($cast_id);
        return view('cast.show', [
            'cast' => $cast,
            'title' => ' Detail Data Cast',
            'name' => 'Detail Data Cast'
        ]);
    }

    public function edit($cast_id)
    {
        $cast = DB::table('cast')->find($cast_id);
        return view('cast.edit', [
            'cast' => $cast,
            'title' => ' Edit Cast',
            'name' => 'Edit Cast'
        ]);
    }

    public function update(Request $request, $cast_id)
    {
        $data = $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);
        $data['updated_at'] = now();
        $query = DB::table('cast')->where('id', $cast_id)->update($data);

        return redirect('/cast')->with('success', 'Data Berhasil Di Edit');
    }

    public function destroy($cast_id)
    {
        $cast = DB::table('cast')->where('id', $cast_id)->delete();
        return redirect('/cast')->with('delete', 'Data Berhasil Dihapus');
    }
}
