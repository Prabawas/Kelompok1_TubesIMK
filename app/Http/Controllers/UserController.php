<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profil()
    {
        return view('user.profil', [
        'title' => 'profil pengurus',
        'users' => User::all()
    ]);
    }

     public function login()
    {
        return view('user.login', [
            'title' => 'Halaman Login'
        ]);
    }

    public function loginAkun(Request $request) 
    {
         $auth = $request->validate([
            'email' => 'required | email',
            'password' => 'required | max:8',
        ]);

        if(Auth::attempt($auth)) {  //Jika data yang diinput sesuai
            $request->session()->regenerate();
            
            return redirect()->intended('/'); //diarahkan ke halaman dashboard
        }

        return back()->with('login', 'login gagal!'); //gagal login balik ke halaman login lagi dan tampilkan pesan kesalahan
    }

    public function logoutAkun(Request $request) //untuk logout
   {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');   //diarahkan ke halaman utama
   }

   public function detail($id)
   {
         $users = User::find($id);

        return view('user.detail', [
            'user' => $users,
            'title' => 'detail profil']);
   }

  public function edit($id) 
  {
        // Mengambil data dari database berdasarkan id yang dipilih lalu membuka halaman update
        $users = User::find($id);

        return view('user.update', [
            'users' => $users,
            'title' => 'edit profil']);
    }

   public function update(Request $request, $id)
   {
        $user = User::find($id);
        $user->update($request->all());
        if($request->hasFile('avatar')) {
            // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
            $request->file('avatar')->move('image/', $request->file('avatar')->getClientOriginalName());
            $user->avatar = $request->file('avatar')->getClientOriginalName();
            $user->save();
        }

        return redirect('/profil')->with('edit', ' Profil berhasil di edit!');
    
   }
    
}
