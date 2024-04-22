<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->title . ' ' . $this->faker->name,
            'email' => $this->faker->safeEmail(),
            'phone' => '+218' + $this->faker->biasedNumberBetween(9, 9),
            'description' => $this->faker->realText(),
            'rate' => $this->faker->numberBetween(1, 5),
            'confirmed_at' => $this->faker->boolean() ? now() : null,
        ];
    }
}
