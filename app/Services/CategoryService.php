<?php

namespace App\Services;

use App\Repositories\CategoryRepo;

class CategoryService extends BaseService
{
    /**
     * @var CategoryRepo
     */
    private $categoryRepo;

    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function fetchCategories()
    {
        return $this->categoryRepo->fetchCategories();
    }

    public function createNewCategory($request)
    {
        $categoryName = $request['name'];
        $isCategoryExist = $this->categoryRepo->findByName($categoryName);
        if ($isCategoryExist) {
            return false;
        }
        return $this->categoryRepo->createNewCategory($categoryName);
    }

    public function delete($id)
    {
        $this->categoryRepo->deleteCategory($id);
    }

    public function update($request)
    {
        $this->categoryRepo->update($request);
    }
}