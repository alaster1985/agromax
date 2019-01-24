<?php

namespace App\Http\Controllers;

use App\Category;
use App\Lot;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::getCategories();
        return view('index', ['categories' => $categories]);
    }

    public function exclusive()
    {
        return view('exclusive');
    }

    public function confirmation()
    {
        return view('confirmation');
    }

    public function charity()
    {
        return view('charity');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function founder()
    {
        return view('founder');
    }

    public function offers($id)
    {
        $lots = Lot::getLotsByCategoryId($id);
        return view('offers', ['lots' => $lots]);
    }

    public function offersAll()
    {
        $lots = Lot::getLots();
        return view('offers', ['lots' => $lots]);
    }
}
