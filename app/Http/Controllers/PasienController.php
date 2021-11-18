<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pasien;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function pelayanan() {
        return view('pasien.register', [
            'title' => 'Data Pasien']);
    }

    public function registerPasien(Request $request)
    {

        $data = $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'jenisKelamin' => 'required',
            'telepon' => 'required | min:12 | max:12',
            'alamat' => 'required',
            'riwayat' => 'required',
            'gejala' => 'required | max:256',
        ]);

        $data['user_id'] = auth()->user()->id;

        Pasien::create($data);
        return redirect('/data-pasien')->with('success', 'Data Pasien berhasil ditambahkan!');
    }

     public function pasien() {
        return view('pasien.dataPasien', [
            'title' => 'Data pasien']);
    }
}
