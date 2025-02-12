<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => strtoupper($this->faker->unique()->bothify('P###')), // Kode unik (contoh: P123)
            'nama' => $this->faker->word(), // Nama produk acak
            'description' => $this->faker->sentence(10), // Deskripsi produk
            'qty' => $this->faker->numberBetween(1, 100), // Stok antara 1-100
            'price' => $this->faker->randomFloat(2, 10000, 1000000) // Harga antara 10rb - 1jt
        ];
    }
}
