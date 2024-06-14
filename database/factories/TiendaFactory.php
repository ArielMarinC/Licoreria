<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vendedor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tienda>
 */
class TiendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sucursal' => $this->faker->word(),
            'zona' => $this->faker->randomElement(['1r nivel', 'Oeste', 'Norte', 'Sud', 'Este']),
            'horas_venta' => $this->faker->randomElement(['10 Horas', '40 Horas', '80 Horas']),
            'vendedor_id' => Vendedor::all()->random()->id
        ];
    }
}
