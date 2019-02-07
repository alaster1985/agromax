<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function viewCategories()
    {
        $allCategories = Category::getCategories();
        return view('admin/viewCategories', ['allCategories' => $allCategories]);
    }

    public function editCategories($id)
    {
        $categoryForEdit = Category::getCategoryById($id);
        return view('admin/editCategories', ['category' => $categoryForEdit]);
    }

    public function updateCategory(CategoryStoreRequest $request)
    {
        Category::updateCategory($request);
        return redirect()->back()->with('message', 'DONE!');
    }

    public function createCategory()
    {
        return view('admin/createCategory');
    }

    public function addCategory(CategoryStoreRequest $request)
    {
        Category::createCategory($request);
        return redirect()->back()->with('message', 'DONE!');
    }
}
