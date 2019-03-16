<?php

namespace App\Http\Controllers;

use App\Category;
use App\Charity;
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
        $keywords = Language::getKeywordsByLanguageCode('en_GB');
        return view('index', ['categoriesUp' => $categoriesUp, 'categoriesLow' => $categoriesLow, 'keywords' => $keywords]);
    }

    public function products(Request $request)
    {
        $categoriesUpDef = Category::getUpperCategories();
        $categoriesLowDef = Category::getLowerCategories();
        $language = $request->lang;
        $lang = Language::checkLanguageSet($language);
        $keywords = Language::getKeywordsByLanguageCode($language);

        if (!$lang) {
            return $this->index();
        } else {
            $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($language);
            $categoriesUp = GetExcelDataService::setCategoriesNameByLangAndId($language, $categoriesUpDef);
            $categoriesLow = GetExcelDataService::setCategoriesNameByLangAndId($language, $categoriesLowDef);
        }
        return view('index', ['categoriesUp' => $categoriesUp, 'categoriesLow' => $categoriesLow, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
    }

    public function company(Request $request)
    {
        $lang = $request->lang;
        $keywords = Language::getKeywordsByLanguageCode($lang);
        $companyInfo = GetExcelDataService::getCompanyInfoByLang($lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        $presentations = Presentation::getPresentations()->where('disable', '=', 0);
        return view('company', ['companyInfo' => $companyInfo, 'newNavNames' => $headerNavListName, 'presentations' => $presentations, 'keywords' => $keywords]);
    }

    public function partnership(Request $request)
    {
        $lang = $request->lang;
        $keywords = Language::getKeywordsByLanguageCode($lang);
        $partnershipInfo = GetExcelDataService::getPartnershipInfoByLang($lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('partnership', ['partnershipInfo' => $partnershipInfo, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
    }

    public function exclusive(Request $request)
    {
        $lang = $request->lang;
        $deliveries = Delivery::getDeliveries();
        $conditions = Condition::getConditions();
        $productsDef = Product::getProducts();
        $keywords = Language::getKeywordsByLanguageCode($lang);
        $products = GetExcelDataService::setProductsNameAndDescriptionByIdAndLang($productsDef, $lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('exclusive', ['conditions' => $conditions, 'products' => $products, 'deliveries' => $deliveries, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
    }

    public function confirmationById(Request $request)
    {
        $language = $request->lang;
        $offer = $request->offer;
        $keywords = Language::getKeywordsByLanguageCode($language);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($language);
        $lotD = Lot::getLotById($offer);
        $lot = GetExcelDataService::setProductNameAndDescriptionForLotByIdAndLang($lotD, $language);
        if (!is_null($lotD)) {
            return view('confirmation', ['lot' => $lot, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
        } else {
            $lots = Lot::paginate(24);
            return view('offers', ['lots' => $lots, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
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
        $keywords = Language::getKeywordsByLanguageCode($lang);
        $exclusiveLotDef = Lot::makeExclusiveLot($request);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        $exclusiveLot = GetExcelDataService::setProductNameAndDescriptionForLotByIdAndLang($exclusiveLotDef, $lang);
        return view('confirmation', ['lot' => $exclusiveLot, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
    }

    public function charity(Request $request)
    {
        $lang = $request->lang;
        $keywords = Language::getKeywordsByLanguageCode($lang);
        $charityInfo = GetExcelDataService::getCharityInfoByLang($lang);
        $charityPostsDefault = Charity::getCharityPosts()->where('disable', '=', 0)->sortByDesc('created_at');
        $charityPosts = GetExcelDataService::setCharityTitleAndPostTextByIdsAndLang($charityPostsDefault, $lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('charity', ['charityInfo' => $charityInfo, 'newNavNames' => $headerNavListName, 'charityPosts' => $charityPosts, 'keywords' => $keywords]);
    }

    public function contacts(Request $request)
    {
        $lang = $request->lang;
        $keywords = Language::getKeywordsByLanguageCode($lang);
        $contactsInfo = GetExcelDataService::getContactsInfoByLang($lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('contacts', ['contactsInfo' => $contactsInfo, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
    }

    public function founder(Request $request)
    {
        $directory = 'videos';
        $videos = array_diff(scandir($directory), array('..', '.'));
        $lang = $request->lang;
        $keywords = Language::getKeywordsByLanguageCode($lang);
        $founderInfo = GetExcelDataService::getFounderInfoByLang($lang);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($lang);
        return view('founder', ['founderInfo' => $founderInfo, 'newNavNames' => $headerNavListName, 'videos' => $videos, 'keywords' => $keywords]);
    }

    public function offers(Request $request)
    {
        $language = $request->lang;
        $categoryId = $request->cat;
        $keywords = Language::getKeywordsByLanguageCode($language);
        $cat = Category::checkCategoryExist($categoryId);
        $lang = Language::checkLanguageSet($language);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($language);

        if ($cat && $lang) {
            $categoryName = GetExcelDataService::getCategoryNameByLangAndId($language, $categoryId);
            $categoryName = $categoryName ?? Category::find($categoryId)->name;
            $lotsLotsByCategoryId = Lot::getLotsByCategoryId($categoryId);
            $lots = GetExcelDataService::setProductsNameAndDescriptionForLotByIdAndLang($lotsLotsByCategoryId,
                $language);
            return view('offers', ['lots' => $lots, 'category' => $categoryName, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
        } elseif ($lang) {
            $lotsDefault = Lot::paginate(24);
            $lots = GetExcelDataService::setProductsNameAndDescriptionForLotByIdAndLang($lotsDefault, $language);
            return view('offers', ['lots' => $lots, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
        } elseif ($cat) {
            $category = Category::getCategoryById($categoryId);
            $lots = Lot::getLotsByCategoryId($categoryId);
            return view('offers', ['category' => $category->name, 'lots' => $lots, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
        } else {
            $lots = Lot::paginate(24);
            return view('offers', ['lots' => $lots, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
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

    public function hotOffers(Request $request)
    {
        $language = $request->lang;
        $keywords = Language::getKeywordsByLanguageCode($language);
        $lang = Language::checkLanguageSet($language);
        $headerNavListName = GetExcelDataService::getHeaderSiteNavListByLang($language);
        $hotOffersLotsDefault = Lot::getHotOffersLots();

        if ($lang) {
            $lots = GetExcelDataService::setProductsNameAndDescriptionForLotByIdAndLang($hotOffersLotsDefault, $language);
        } else {
            $lots = $hotOffersLotsDefault;
        }
        return view('hotOffers', ['lots' => $lots, 'newNavNames' => $headerNavListName, 'keywords' => $keywords]);
    }
}
