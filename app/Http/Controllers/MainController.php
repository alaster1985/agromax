<?php

namespace App\Http\Controllers;

use App\Category;
use App\Delivery;
use App\Description;
use App\Http\Requests\ExclusiveLotRequest;
use App\Language;
use App\Lot;
use App\Product;
use App\Services\GetExcelDataService;
use Illuminate\Http\Request;

class MainController extends Controller
{
//    var $_dataRoutes = null;
//
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
        if (!is_null($lot)) {
            return view('confirmation', ['lot' => $lot]);
        } else {
            $lots = Lot::paginate(24);
            return view('offers', ['lots' => $lots]);
        }
    }

    public function exConfirm(ExclusiveLotRequest $request)
    {
//        // TODO:
//        if (array_key_exists($request->get('cat')) {
//            $mediator = $this->_dataRoutes[$request->get('cat')]($this, $myPDO, $request);
//            return new View($mediator)
//        }) else {
//
//    };
        $exclusiveLot = Lot::makeExclusiveLot($request);
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
        $language = $request->lang;
        $categoryId = $request->cat;
        $cat = Category::checkCategoryExist($categoryId);
        $lang = Language::checkLanguageSet($language);

        if ($cat && $lang) {
            $categoryName = GetExcelDataService::getCategoryNameByLangAndId($language, $categoryId);
            $categoryName = $categoryName ?? Category::find($categoryId)->name;
            $lotsLotsByCategoryId = Lot::getLotsByCategoryId($categoryId);
            $lots = GetExcelDataService::setProductNameAndDescriptionByLangAndId($lotsLotsByCategoryId, $language);
            return view('offers', ['lots' => $lots, 'category' => $categoryName]);
        } elseif ($lang) {
            $lotsDefault = Lot::paginate(24);
            $lots = GetExcelDataService::setProductNameAndDescriptionByLangAndId($lotsDefault, $language);
            return view('offers', ['lots' => $lots]);
        } elseif ($cat) {
            $category = Category::getCategoryById($categoryId);
            $lots = Lot::getLotsByCategoryId($categoryId);
            return view('offers', ['category' => $category->name, 'lots' => $lots]);
        } else {
            $lots = Lot::paginate(24);
            return view('offers', ['lots' => $lots]);
        }


//        $language = Language::getLanguageByCode($request->lang)->pluck('id');
//        $category = Category::getCategoryById($request->cat);
//        if (is_null($category) || !isset($language->all()[0])) {
//            $lots = Lot::paginate(24);
//            return view('offers', ['lots' => $lots, 'language' => 1]);
//        } else {
//            $lots = Lot::getLotsByCategoryId($request->cat);
//            return view('offers', ['lots' => $lots, 'category' => $category->name, 'language' => $language[0]]);
//        }
    }
}
