<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function beranda()
    {
        return view('layouts.beranda', [
            'title' => 'Beranda'
        ]);
    }

    public function panduan()
    {
        return view('layouts.panduan', [
            'title' => 'Panduan'
        ]);
    }
}
