<?php
namespace App\Services;


use App\Repositories\CategoryRepo;

class CategoryService
{
    /**
     * @var CategoryRepo
     */
    private $categoryRepo;

    public function __construct (CategoryRepo $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function fetchCategories()
    {
        return $this->categoryRepo->fetchCategories();
    }
}