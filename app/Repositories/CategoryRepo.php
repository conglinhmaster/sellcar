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
        return Category::create(['name' => $categoryName]);
    }

    public function findByName($categoryName)
    {
        return Category::where('name', '=', $categoryName)->first();
    }


    public function deleteCategory($id)
    {
        Category::destroy($id);
    }

    public function update($request)
    {
        $update = Category::find($request['id']);
        $update->name = $request['name'];
        $update->save();
    }
}