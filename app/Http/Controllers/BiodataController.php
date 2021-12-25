<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodata() //menampilkan form
    {
        return view('biodata');
    }

    public function data(Request $request) //menangkap data yang dikirim melalui form
    {        
        // $data=[
        //     'nim'=> $request->nim,
        //     'nama'=>$request->nama,
        //     'kelas'=>$request->kelas,
        //     'jurusan'=>$request->jurusan,
        // ];
        // dd($data);
        

        $validasi=$request->validate(
            [
            'nim'=> 'required | numeric',
            'nama' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required'
        ],

        [
            'nim.required' => 'Field harus diisi!',
            'nim.numeric' => 'Field harus diisi dengan angka!'
        ]
    );
       
    }
}
