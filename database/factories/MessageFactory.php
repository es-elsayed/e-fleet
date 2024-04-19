<?php

namespace Database\Factories;

use App\Services\ContactUsSubject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subject_types = ContactUsSubject::ids();
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'subject' => $subject_types[rand(0, count($subject_types) - 1)],
            'phone' => $this->faker->phoneNumber(),
            'message' => $this->faker->paragraph(),
        ];
    }
}
