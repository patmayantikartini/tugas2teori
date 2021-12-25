<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class crud extends Controller
{
    public function tambah()
    {
        buku::create([
            'name_buku'=>'Pemograman Web',
            'penerbit'=>'UIN Alauddin Makassar',
            'tahun'=>2021,
            'penulis'=>'Gunawan',
        ]);

        buku::create([
            'name_buku'=>'Algoritma',
            'penerbit'=>'UIN Alauddin Makassar',
            'tahun'=>2020,
            'penulis'=>'Rahman',
        ]);

        buku::create([
            'name_buku'=>'Basis data',
            'penerbit'=>'UIN Alauddin Makassar',
            'tahun'=>2020,
            'penulis'=>'Rahman',
        ]);

        return ('berhasil ditambah');
    }

    public function edit($id)
    {
        $data=buku::find($id);
        $data->penerbit='Data diubah';
        $data->save();

        return 'data berhasil diubah';
        //dd($data->penerbit);
    }
}
