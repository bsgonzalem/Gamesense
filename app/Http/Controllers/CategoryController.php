<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\View\View;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{

    public function index(CategoryService $categoryService): View
    {

        $viewData = [];
        $viewData['categories'] = $categoryService->getAllCategories();

        return view('category.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];

        $viewData['title'] = 'Create category';

        return view('category.create')->with('viewData', $viewData);
    }

    public function save(CategoryRequest $categoryRequest, CategoryService $categoryService): RedirectResponse
    {
        $categoryRequest->validated();

        $categoryService->createCategory($categoryRequest->validated());

        return redirect()->route('category.index');
    }
    public function show(string $id, CategoryService $categoryService): View
    {
        $viewData = [];

        $category = $categoryService->getCategoryById((int) $id);

        $viewData['category'] = $category;
        $viewData['products'] = $categoryService->getProductsByCategory($category);

        return view('category.show')->with('viewData', $viewData);
    }

    public function edit(string $id, CategoryService $categoryService): View
    {
        $viewData = [];

        $category = $categoryService->getCategoryById((int) $id);

        $viewData['category'] = $category;

        return view('category.edit')->with('viewData', $viewData);
    }

    public function update(string $id, CategoryRequest $categoryRequest, CategoryService $categoryService): RedirectResponse
    {
        $category = $categoryService->getCategoryById((int) $id);
        $categoryService->updateCategory($category, $categoryRequest->validated());

        return redirect()->route('category.index');
    }

    public function delete(string $id, CategoryService $categoryService): RedirectResponse
    {
        $category = $categoryService->getCategoryById((int) $id);
        $categoryService->deleteCategory($category);
        return redirect()->route('category.index');
    }
}
