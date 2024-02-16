<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // qua si creano i dati fake presi da fakerphp
            'nome'=>fake()->word() ,
            'prezzo'=>fake()->numberBetween(5, 100) ,
            'voto'=>fake()->numberBetween(1, 5) ,
        ];
    }
}
