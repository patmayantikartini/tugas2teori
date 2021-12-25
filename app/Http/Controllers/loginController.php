<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
       public function viewRegister()
    {
        return view('register');
    }

    public function viewLogin()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        $validasi = $request -> validate(
            [
                'Username' => 'required',
                'email'    => 'required|email',
                'password' => 'required'
            ],
            [
                'username.required' => 'Field harus diisi',
                'email.email' => 'Filed harus diisi dengan benar',
                'email.required' => 'Filed harus diisi dengan benar',
                'password.required' => 'Field harus diisi'
            ]
            );
            $password=Hash::make($request->password);

            $add=User::create(
                [
                    'name' => $request->username,
                    'email' => $request->email,
                    'password' => $password
                ]
                );
                return redirect('/login')->with('register', 'Akun Berhasil dibuat, Silahkan login');
     }
        
     public function login(){
         return view('layouts.login');
     }

     public function sign_in(Request $request)
     {
         $validasi=$request->validate([
             'email'=>'required',
             'password'=>'required'
         ],
         [
             'email.required'=>'Field harus diisi',
             'password.required'=>'Field harus diisi',
         ]
         );

         if(Auth::attemp($validasi))
         {
             $request->session()->regenerate();
             return redirect()->intended('tampil-layout');
         }
         return back()->with('gagal-login', 'Password/Email salah');
     }

    public function logout(Request  $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/login');

    }
}


