<?php

namespace Database\Factories;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    public function definition()
    {
        $identifier = $this->faker->numberBetween(1000,2000);

        return [
            'identifier' => $identifier,
            'fname' => $this->faker->name(),
            'lname' => $this->faker->lastName(),
        ];
    }
}
