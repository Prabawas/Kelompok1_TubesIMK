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

    public function tentang() {
        return view('layouts_guest/about', [
            'title' => 'Tentang']);
    }

    public function pelayanan() {
        return view('layouts_guest/service', [
            'title' => 'Pelayanan']);
    }

    public function dokter() {
        return view('layouts_guest/doctor', [
            'title' => 'Dokter']);
    }

    public function kontak() {
        return view('layouts_guest/contact', [
            'title' => 'Kontak']);
    }

}
