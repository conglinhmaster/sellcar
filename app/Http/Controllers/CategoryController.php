<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;

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
        $result = $this->categoryService->createNewCategory($request->all());
        if ($result) {
            return redirect(route('category.index'));
        }
        return redirect()->back()->withErrors(['duplicate' => 'Category is existed']);
    }

    public function create()
    {
        return view('categories.add');
    }

    public function delete($id)
    {
        $this->categoryService->delete($id);
        return redirect(route('category.index'));
    }

    public function edit($id, Request $request)
    {
       return view('categories.edit', ['categoryName' =>$request->get('name'), 'id' => $id]);
    }

    public function update(Request $request)
    {
        $this->categoryService->update($request->all());
        return redirect(route('category.index'));

    }
}