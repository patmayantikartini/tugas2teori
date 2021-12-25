<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Perpustakaan extends Controller
{
            public function data()
    {
        $buku = new \stdClass();
        $buku-> isbn = "111-222-333-444-1";
        $buku-> judul = "Rekayasa Perangkat Lunak";
        $buku-> author = "Adi Nugroho";
        $buku-> tahun = "2020";   

        $data [] = $buku;

        $buku = new \stdClass();
        $buku-> isbn = "111-222-333-444-2";
        $buku-> judul = "Sistem Basis Data";
        $buku-> author = "Budi Susanto";
        $buku-> tahun = "2018";

        $data [] = $buku;

        $buku = new \stdClass();
        $buku-> isbn = "111-222-333-444-3";
        $buku-> judul = "Algoritma dan Pemrograman";
        $buku-> author = "Jamaludin";
        $buku-> tahun = "2019";

        $data [] = $buku;
        return $data;
    }

    public function show(Request $request, $isbn)
    {
        $data = $this->data();
        $item = null;
        foreach($data as $buku){
            if ($isbn == $buku->isbn) {
                $item = $buku;
                break;
            }
        }

        return view('buku-isbn')->with('book', $item);
    }

    public function index()
    {
        $data = $this->data();
        return view('daftar-buku')->with('books', $data);
    }
}

