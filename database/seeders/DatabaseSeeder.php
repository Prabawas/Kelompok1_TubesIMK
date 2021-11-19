<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pasien;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* User::create([
            'nama' => 'Kelompok1',
            'tgl_lahir' => '1964-08-28',
            'jenisKelamin' => 'Laki-laki',
            'alamat' => 'Medan',
            'avatar' => '/image/profil.jpeg',
            'telepon' => '0812345678910',
            'posisi' => 'Pemilik Klinik',
            'email' => 'kelompok1@gmail.com',
            'password' => bcrypt('password'),
            'pemilik' => 1,
        ]);

        User::factory(3)->create();*/

        Pasien::factory(20)->create();
    }
}
