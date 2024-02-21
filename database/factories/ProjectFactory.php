<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->sentence(4, false),
            'description' => fake()->paragraph(3, false),

            //Non ci va l'img perche' abbiamo passato un link assoluto nella migration
            // 'image' => fake()->imageUrl(360, 360, 'animals', true, 'cats'),
        ];
    }
}
