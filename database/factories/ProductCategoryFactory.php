<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
    public function definition()
    {
        return [
            'product_id' => Product::get()->random()->id,
            'category_id' => Category::get()->random()->id,
        ];
    }
}
