<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function beranda() {
        return view('layouts_guest/guest-template', [
            'title' => 'Beranda'
        ]);
    }


    public function pelayanan() {
        return view('layouts_guest/service', [
            'title' => 'Pelayanan']);
    }

     public function pasien() {
        return view('layouts_guest/pasien', [
            'title' => 'Data pasien']);
    }

   

}
