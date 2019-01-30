<?php

namespace App\Http\Controllers;

use App\Category;
use App\Delivery;
use App\Http\Requests\ExclusiveLot;
use App\Lot;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    var $_dataRoutes = null;

//    public function __construct()
//    {
//        $this->_dataRoutes = array(
//            'cucumber' => function($parent, $pdo, $reqData) {
//                /*  */
//                return new Order();
//            },
//            'patyto' => function($parent, $pdo, $reqData) {
//                /*  */
//                return new Product();
//            });
//    }


    public function index()
    {
        $categoriesUp = Category::getUpperCategories();
        $categoriesLow = Category::getLowerCategories();
        return view('index', ['categoriesUp' => $categoriesUp, 'categoriesLow' => $categoriesLow]);
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

    public function confirmationById(Request $request)
    {
        $lot = Lot::getLotById($request->offer);
        return view('confirmation', ['lot' => $lot]);
    }

    public function exConfirm(ExclusiveLot $request)
    {
//        // TODO:
//        if (array_key_exists($request->get('cat')) {
//            $mediator = $this->_dataRoutes[$request->get('cat')]($this, $myPDO, $request);
//            return new View($mediator)
//        }) else {
//
//    };
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

    public function offers(Request $request)
    {
        $category = Category::getCategoryById($request->cat)[0]->name;
        $lots = Lot::getLotsByCategoryId($request->cat);
        return view('offers', ['lots' => $lots, 'category' => $category]);
    }

    public function offersAll()
    {
        $lots = Lot::getLots();
        return view('offers', ['lots' => $lots]);
    }
}
