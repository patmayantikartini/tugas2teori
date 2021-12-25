<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud;
use App\Http\Controllers\templateController;
use App\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

Route::get('/buku/create', 'BukuController@create');
Route::get('/buku', 'BukuController@index');
Route::post('/buku', 'BukuController@store');
Route::get('/buku/{id}', 'BukuController@show');

Route::get('tambah-data',[crud::class,'tambah']);
Route::get('template',[templateController::class,'viewTemplate']);
Route::get('konten',[templateController::class,'viewKonten']);
Route::get('login',[loginController::class,'viewLogin']);
Route::get('register',[loginController::class,'viewRegister']);


Route::get('/kontenisi',[templateController::class,'viewKontenIsi']);
Route::get('/konten2',[templateController::class,'viewKonten2']);
Route::post('/konten2', [templateController::class,'data']);
