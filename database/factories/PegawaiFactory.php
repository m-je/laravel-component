<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jabatan;

class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => '351414'.$this->faker->unique()->randomNumber(7),
            'nama' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'no_hp' => $this->faker->unique()->numerify,
            'password' => bcrypt('admin123'),
            'jabatan_id' => $this->faker->randomElement(Jabatan::where('id','>',1)->get())['id'],
        ];
    }
}
