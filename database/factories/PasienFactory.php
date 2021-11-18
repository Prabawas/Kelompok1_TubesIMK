<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'tgl_lahir' => $this->faker->date('Y-m-d'),
            'umur' => $this->faker->numberBetween($min = 10, $max = 50),
            'jenisKelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'telepon' => $this->faker->e164PhoneNumber(),
            'alamat' => $this->faker->address(),
            'riwayat' => $this->faker->sentence(mt_rand(5,25)),
            'gejala' => $this->faker->sentence(mt_rand(10,25)),
            'user_id' => mt_rand(1,4),
        ];
    }
}
