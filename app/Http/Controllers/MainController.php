<?php

namespace App\Http\Controllers;

use App\Category;
use App\Delivery;
use App\Lot;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::getCategories();
        $specialLots = Lot::getSpecialLots();
        return view('index', ['categories' => $categories, 'specialLots' => $specialLots]);
    }

    public function company()
    {
        return view('company');
    }

    public function partnership()
    {
        return view('partnership');
    }

    public function exclusive()
    {
        $deliveries = Delivery::getDeliveries();
        $products = Product::getProducts();
        return view('exclusive', ['products' => $products, 'deliveries' => $deliveries]);
    }

    public function confirmationById($id)
    {
        $lot = Lot::getLotById($id);
        return view('confirmation', ['lot' => $lot]);
    }

    public function confirmation(Request $request)
    {
        $data = $request;
        $exclusiveLot = Lot::makeExclusiveLot($data);
        return view('confirmation', ['lot' => $exclusiveLot]);
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
//        $a = Lot::find(15)->product->name;
//        dd($a);
        if (isset(Category::getCategoryById($id)[0])){
            $category = Category::getCategoryById($id)[0]->name;
            $lots = Lot::getLotsByCategoryId($id);
            return view('offers', ['lots' => $lots, 'category' => $category]);
        } else {
            return $this->offersAll();
        }
    }

    public function offersAll()
    {
        $lots = Lot::getLots();
        return view('offers', ['lots' => $lots]);
    }
}
