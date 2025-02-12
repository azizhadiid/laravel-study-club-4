<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->numerify('F1E######'),
            'nama' => $this->faker->name(),
            'prodi' => $this->faker->randomElement([
                'Sistem Informasi',
                'Teknik Informatika',
                'Manajemen Informatika',
                'Ilmu Komputer',
                'Teknik Elektro',
                'Teknik Komputer'
            ]),
            'angkatan' => $this->faker->year(),
            'alamat' => $this->faker->address(),
        ];
    }
}
