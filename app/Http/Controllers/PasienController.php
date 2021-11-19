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
        //filter diambil dari model pasien untuk melakukan searching
        return view('pasien.dataPasien', [
            'title' => 'Data pasien',
            'pasiens' => Pasien::orderBy('nama')->filter(request(['cari']))->paginate(7)
        ]);
    }

    public function detailPasien($id)
    {
         $pasiens = Pasien::find($id);

        return view('pasien.detailPasien', [
            'pasien' => $pasiens,
            'title' => 'detail data pasien']);
    }

    public function editPasien($id) 
  {
        // Mengambil data dari database berdasarkan id yang dipilih lalu membuka halaman update
        $pasiens = Pasien::find($id);

        return view('pasien.updatePasien', [
            'pasien' => $pasiens,
            'title' => 'data pasien']);
    }

    public function updatePasien(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        $pasien->update($request->all());

        return redirect('/data-pasien')->with('edit', 'Data pasien berhasil diupdate!');
    }

    public function deletePasien($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect('/data-pasien')->with('delete', 'Data pasien berhasil dihapus');
    }
}
