<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepo extends BaseRepository
{
    public function fetchCategories()
    {
        return Category::all();
    }

    public function createNewCategory($categoryName)
    {
        Category::create(['name' => $categoryName]);
    }
}