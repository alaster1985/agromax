<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function viewCategories()
    {
        $allCategories = Category::getCategories();
        return view('admin/viewCategories', ['allCategories' => $allCategories]);
    }

    public function editCategories()
    {
        return view('admin/editCategories');
    }

    public function createCategory()
    {
        return view('admin/createCategory');
    }
}
