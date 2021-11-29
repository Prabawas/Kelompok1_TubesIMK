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

    public function register()
    {
        return view('user.register', [
            'title' => 'registrasi petugas'
        ]);
    }

    public function registerAkun(Request $request)
    {
        $regist = $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required | min:12 | max:12',
            'avatar' => 'image | file | max:1024',
            'posisi' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:6 | max:8',
        ]);

        if ($request->hasFile('avatar')) {
            // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
            $request->file('avatar')->move('image/', $request->file('avatar')->getClientOriginalName());
            $regist['avatar'] = $request->file('avatar')->getClientOriginalName();
        }

        $regist['password'] = bcrypt($regist['password']);    //Meng-enkripsi password

        User::create($regist);
        return redirect('/profil')->with('success', ' Petugas berhasil ditambah!');
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

        if (Auth::attempt($auth)) {  //Jika data yang diinput sesuai
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
            'title' => 'detail profil'
        ]);
    }

    public function edit($id)
    {
        // Mengambil data dari database berdasarkan id yang dipilih lalu membuka halaman update
        $users = User::find($id);

        return view('user.update', [
            'users' => $users,
            'title' => 'edit profil'
        ]);
    }

    public function update(Request $request, User $user)
    {
        // $user = User::find($id);
        // $user->update($request->all());
        // if($request->hasFile('avatar')) {
        //     // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
        //     $request->file('avatar')->move('image/', $request->file('avatar')->getClientOriginalName());
        //     $user->avatar = $request->file('avatar')->getClientOriginalName();
        //     $user->save();
        // }
        $regist = $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required | min:12 | max:12',
            'avatar' => 'image | file | max:1024',
            'posisi' => 'required',
            'email' => 'required | email',
        ]);

        if ($request->hasFile('avatar')) {
            // Mengambil gambar dan menyimpannya di folder tujuan dengan nama asli
            $request->file('avatar')->move('image/', $request->file('avatar')->getClientOriginalName());
            $regist['avatar'] = $request->file('avatar')->getClientOriginalName();
        }

        User::where('id', $user->id)
            ->update($regist);


        return redirect('/profil')->with('edit', ' Profil telah berhasil diedit!');
    }

    public function delete($id)
    {
        // Memilih data dari database berdasarkan id dan menghapusnya dengan fungsi delete()
        // lalu kembali ke halaman data user
        $users = User::find($id);
        $users->delete();

        return redirect('/profil')->with('hapus', ' Profil berhasil dihapus!');
    }
}
