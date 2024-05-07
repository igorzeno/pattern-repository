<?php

namespace Database\Factories;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    public function definition()
    {
        $identifier = $this->faker->asciify('*****************');
        $year = $this->faker->year;
        $page = $this->faker->numberBetween(100, 500);

        return [
            'identifier' => $identifier,
            'fname' => $this->faker->name(),
            'lname' => $this->faker->lastName(),
        ];
    }
}
