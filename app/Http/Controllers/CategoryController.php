<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    public function __construct(CategoryRepository $repo)
    {
        parent:: __construct($repo);
    }
}
