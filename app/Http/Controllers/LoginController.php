<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;    //Menggunakan model user 
use Illuminate\Support\Facades\Auth;    //Menggunakan ini agar auth dapat dipakai

class LoginController extends Controller
{
    public function login()
    {
        return view('user.login', [
            'title' => 'Halaman Login'
        ]);
    }

    public function loginAkun(Request $request) {
        // Membuat beberapa aturan dalam pengisian data login
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        // Mencocokkan data yang diinput dengan data base
        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }
        return redirect('/login');
    }
}
