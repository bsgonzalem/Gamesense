<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    public function getAllCategories(): Collection
    {
        return Category::all();
    }

    public function createCategory(array $categoryData): Category
    {
        return Category::create($categoryData);
    }

    public function getCategoryById(int $id): Category
    {
        return Category::findOrFail($id);
    }

    public function updateCategory(Category $category, array $categoryData): Category
    {
        $category->update($categoryData);

        return $category;
    }

    public function deleteCategory(Category $category): void
    {
        $category->delete();
    }

    public function getProductsByCategory(Category $category): Collection
    {
        return $category->products;
    }
}
