<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'company_name' => $this->faker->company(),
            'telephone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'date_of_birth' => $this->faker->date(),
            'photo' => $this->faker->url()
        ];
    }
}
