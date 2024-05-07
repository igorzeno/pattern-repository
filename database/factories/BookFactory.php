<?php

namespace Database\Factories;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition()
    {
        $isbn = $this->faker->asciify('******');
        $year = $this->faker->year;
        $page = $this->faker->numberBetween(100,500);


        return [
            'isbn' => $isbn,
            'name' => $this->faker->name(),
            'year' => $year,
            'page' => $page,
            'publisher_id' => Publisher::get()->random()->id,
        ];
    }
}
