<?php

namespace App\Http\Controllers;
use App\Models\Laporan;

use Illuminate\Http\Request;


class templateController extends Controller
{
    public function viewTemplate()
    {
        return view('template2');
    }

    public function viewKonten()
    {
        return view('form');
    }

    public function viewKontenIsi()
    {
        $tb_mahasiswa = Laporan::all();
        return view('isilaporan', ['tb_mahasiswa' => $tb_mahasiswa]);

    }

    public function viewKonten2()
    {
        return view('laporantemplate');
    }

public function data(Request $request) 
{        
    $validasi=$request->validate(
        [
        // 'nama' => 'required | unique:posts|max:255',
        'nama' => 'required',
        'nim'=> 'required | numeric',
        'jeniskelamin' => 'required',
        'email' => 'required'
    ],

    [
        'nama.required' => 'Field harus diisi!',
        'jeniskelamin.required' => 'Field harus diisi!',
        'nim.required' => 'Field harus diisi!',
        'nim.numeric' => 'Field harus diisi dengan angka!',
        'email.required' => 'Field harus diisi!'
    ]);
    Laporan::create($request->all());
    return redirect(url('kontenisi'));
}
}
