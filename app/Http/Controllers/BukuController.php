<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    //     public function index()
    // {
    //     $buku = new \stdClass();
    //     $buku-> isbn = "978-623-224-389-7";
    //     $buku-> judul = "Sirah Nabawiyah";
    //     $buku-> author = "Ust. Apad Ruslan";
    //     $buku-> tahun = "2020";   

    //     $data [] = $buku;

    //     $buku = new \stdClass();
    //     $buku-> isbn = "978-602-8997-75-1";
    //     $buku-> judul = "Zikir & Doa Nabi SAW";
    //     $buku-> author = "KH. Sulhan Abu Fitria";
    //     $buku-> tahun = "2013";

    //     $data [] = $buku;

    //     $buku = new \stdClass();
    //     $buku-> isbn = "978-623-244-327-3";
    //     $buku-> judul = "Himpunan Nama Bayi Islami Terindah Sepanjang Masa";
    //     $buku-> author = "Faizhatul Rizky";
    //     $buku-> tahun = "2020";

    //     $data [] = $buku;
    //     $list = '';
    //     foreach($data as $buku){
    //         $list .= '<li > Judul: ' . $buku->judul . '</li>';
    //     } 
    //     return '<ul>' .$list . '</li>';
    // }

//     private function data()
//     {
//             $buku = new \stdClass();
//             $buku-> isbn = "978-623-224-389-7";
//             $buku-> judul = "Sirah Nabawiyah";
//             $buku-> author = "Ust. Apad Ruslan";
//             $buku-> tahun = "2020";   
    
//             $data [] = $buku;
    
//             $buku = new \stdClass();
//             $buku-> isbn = "978-602-8997-75-1";
//             $buku-> judul = "Zikir & Doa Nabi SAW";
//             $buku-> author = "KH. Sulhan Abu Fitria";
//             $buku-> tahun = "2013";
    
//             $data [] = $buku;
    
//             $buku = new \stdClass();
//             $buku-> isbn = "978-623-244-327-3";
//             $buku-> judul = "Himpunan Nama Bayi Islami Terindah Sepanjang Masa";
//             $buku-> author = "Faizhatul Rizky";
//             $buku-> tahun = "2020";
    
//             $data [] = $buku;
//             return $data;
//     }

//     public function show(Request $request, $isbn)
//     {
//         $data = $this->data();
//         $item = null;
//         foreach($data as $buku){
//             if ($isbn == $buku->isbn) {
//                 $item = $buku;
//                 break;
//             }
//         }

//         return $html = $item? $item->judul : 'Buku tidak ditemukan';
// }
// public function index()
//     {
//         $data = $this->data();
//         $list = '';
//         foreach($data as $buku){
//             $list .= '<li>Judul: ' . $buku->judul . '</li>';
//         }
//         return '<ul>' . $list . '<ul>';
//     }

private function data()
{
        $buku = new \stdClass();
        $buku-> isbn = "978-623-224-389-7";
        $buku-> judul = "Sirah Nabawiyah";
        $buku-> author = "Ust. Apad Ruslan";
        $buku-> tahun = "2020";   

        $data [] = $buku;

        $buku = new \stdClass();
        $buku-> isbn = "978-602-8997-75-1";
        $buku-> judul = "Zikir & Doa Nabi SAW";
        $buku-> author = "KH. Sulhan Abu Fitria";
        $buku-> tahun = "2013";

        $data [] = $buku;

        $buku = new \stdClass();
        $buku-> isbn = "c";
        $buku-> judul = "Himpunan Nama Bayi Islami Terindah Sepanjang Masa";
        $buku-> author = "Faizhatul Rizky";
        $buku-> tahun = "2020";

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

        return view('show-buku')->with('book', $item);
    }

    public function index()
    {
        $data = $this->data();
        return view('daftar-buku')->with('books', $data);
    }

    public function create()
    {
        return view('create-buku');
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'isbn' => 'required|max:50',
    //         'judul' => 'required',
    //     ]);
    //     return $validatedData;
    // }

    public function store(StoreNewBook $request)
    {
        $validated = $request->validated();
        return $validated;
    }
}