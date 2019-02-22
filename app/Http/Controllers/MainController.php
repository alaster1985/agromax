<?php

namespace App\Http\Controllers;

use App\Category;
use App\Condition;
use App\Delivery;
use App\Http\Requests\ExclusiveLotRequest;
use App\Language;
use App\Lot;
use App\Presentation;
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

    public function products(Request $request)
    {
        $categoriesUpDef = Category::getUpperCategories();
        $categoriesLowDef = Category::getLowerCategories();
        $lang = $request->lang;
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        if (!$lang) {
            $this->index();
        } else {
            $categoriesUp = GetExcelDataService::setCategoriesNameByLangAndId($lang, $categoriesUpDef);
            $categoriesLow = GetExcelDataService::setCategoriesNameByLangAndId($lang, $categoriesLowDef);
        }
        return view('index', ['categoriesUp' => $categoriesUp, 'categoriesLow' => $categoriesLow, 'newNavNames' => $headerNavListName]);
    }

    public function company(Request $request)
    {
        $lang = $request->lang;
        $companyInfo = GetExcelDataService::getCompanyInfoByLang($lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        $presentations = Presentation::getPresentations()->where('disable', '=', 0);
        return view('company', ['companyInfo' => $companyInfo, 'newNavNames' => $headerNavListName, 'presentations' => $presentations]);
    }

    public function partnership(Request $request)
    {
        $lang = $request->lang;
        $partnershipInfo = GetExcelDataService::getPartnershipInfoByLang($lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('partnership', ['partnershipInfo' => $partnershipInfo, 'newNavNames' => $headerNavListName]);
    }

    public function exclusive(Request $request)
    {
        $lang = $request->lang;
        $deliveries = Delivery::getDeliveries();
        $conditions = Condition::getConditions();
        $productsDef = Product::getProducts();
        $products = GetExcelDataService::setProductsNameAndDescriptionByIdAndLang($productsDef, $lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('exclusive', ['conditions' => $conditions, 'products' => $products, 'deliveries' => $deliveries, 'newNavNames' => $headerNavListName]);
    }

    public function confirmationById(Request $request)
    {
        $language = $request->lang;
        $offer = $request->offer;
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($language);
        $lotD = Lot::getLotById($offer);
        $lot = GetExcelDataService::setProductNameAndDescriptionForLotByIdAndLang($lotD, $language);
        if (!is_null($lotD)) {
            return view('confirmation', ['lot' => $lot, 'newNavNames' => $headerNavListName]);
        } else {
            $lots = Lot::paginate(24);
            return view('offers', ['lots' => $lots, 'newNavNames' => $headerNavListName]);
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
        $lang = $request->lang;
        $exclusiveLotDef = Lot::makeExclusiveLot($request);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        $exclusiveLot = GetExcelDataService::setProductNameAndDescriptionForLotByIdAndLang($exclusiveLotDef, $lang);
        return view('confirmation', ['lot' => $exclusiveLot, 'newNavNames' => $headerNavListName]);
    }

    public function charity(Request $request)
    {
        $lang = $request->lang;
        $charityInfo = GetExcelDataService::getCharityInfoByLang($lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('charity', ['charityInfo' => $charityInfo, 'newNavNames' => $headerNavListName]);
    }

    public function contacts(Request $request)
    {
        $lang = $request->lang;
        $contactsInfo = GetExcelDataService::getContactsInfoByLang($lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('contacts', ['contactsInfo' => $contactsInfo, 'newNavNames' => $headerNavListName]);
    }

    public function founder(Request $request)
    {
        $lang = $request->lang;
        $founderInfo = GetExcelDataService::getFounderInfoByLang($lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('founder', ['founderInfo' => $founderInfo, 'newNavNames' => $headerNavListName]);
    }

    public function offers(Request $request)
    {
        $language = $request->lang;
        $categoryId = $request->cat;
        $cat = Category::checkCategoryExist($categoryId);
        $lang = Language::checkLanguageSet($language);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($language);

        if ($cat && $lang) {
            $categoryName = GetExcelDataService::getCategoryNameByLangAndId($language, $categoryId);
            $categoryName = $categoryName ?? Category::find($categoryId)->name;
            $lotsLotsByCategoryId = Lot::getLotsByCategoryId($categoryId);
            $lots = GetExcelDataService::setProductsNameAndDescriptionForLotByIdAndLang($lotsLotsByCategoryId,
                $language);
            return view('offers', ['lots' => $lots, 'category' => $categoryName, 'newNavNames' => $headerNavListName]);
        } elseif ($lang) {
            $lotsDefault = Lot::paginate(24);
            $lots = GetExcelDataService::setProductsNameAndDescriptionForLotByIdAndLang($lotsDefault, $language);
            return view('offers', ['lots' => $lots, 'newNavNames' => $headerNavListName]);
        } elseif ($cat) {
            $category = Category::getCategoryById($categoryId);
            $lots = Lot::getLotsByCategoryId($categoryId);
            return view('offers', ['category' => $category->name, 'lots' => $lots, 'newNavNames' => $headerNavListName]);
        } else {
            $lots = Lot::paginate(24);
            return view('offers', ['lots' => $lots, 'newNavNames' => $headerNavListName]);
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
