<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Services\CategoryService;

class CategoryController
{
    /**
     * @var CategoryService
     */
    private $categoryService;

    public function __construct (CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->fetchCategories();

        return view('categories.index', ['categories' => $categories]);
    }

    public function store(CreateCategoryRequest $request)
    {
        $this->categoryService->createNewCategory($request->all());

        return view();
    }
}