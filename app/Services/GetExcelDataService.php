<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\Exception;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
    all magic numbers are numbers of rows in the translation file
    +1 = offset for rows in the translation file because of head
*/

class GetExcelDataService extends Controller
{
    public static $inputFileType = 'Xlsx';
    public static $inputFileName = 'translation/translate.xlsx';

//    public static function getAllDirect()
//    {
//        $reader = IOFactory::createReader(self::$inputFileType);
//        $reader->setReadDataOnly(true);
//        $spreadsheet = $reader->load(self::$inputFileName);
//        $allSheets = $spreadsheet->getSheetNames();
//        $cat = [
//            'id' => 'A',
//            'name' => 'B',
//        ];
//        $prod = [
//            'id' => 'G',
//            'name' => 'H',
//            'desc' => 'I',
//        ];
//        $data = [
//            'categories' => $cat,
//            'products' => $prod,
//        ];
//        $dir = [];
//        foreach ($allSheets as $key => $val) {
//            foreach ($data as $dat1 => $dat2) {
//                foreach ($dat2 as $k => $v) {
//                    foreach ($spreadsheet->getSheetByName($val)->getColumnIterator($startColumn = $v,
//                        $endColumn = $v) as $column) {
//                        $cellIterator = $column->getCellIterator();
//                        $cellIterator->setIterateOnlyExistingCells(false);
//                        $cells = [];
//                        foreach ($cellIterator as $key => $cell) {
//                            if ($key === 1 || $cell->getValue() === null) {
//                                continue;
//                            } else {
//                                $cells[] = $cell->getValue();
//                            }
//                        }
//                        $dir[$val][$dat1][$k] = $cells;
//                    }
//                }
//            }
//        }
//        return $dir;
//    }

    public static function getCategoryNameByLangAndId($language, $categoryId)
    {
        if (self::checkSheetExist($language)) {
            $category_row = $categoryId + 1;
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
            $translatedCategoryName = $spreadsheet
                ->getSheetByName($language)
                ->getCell('B' . $category_row)
                ->getValue();
            return $translatedCategoryName;
        } else {
            return null;
        }
    }

    public static function setCategoriesNameByLangAndId($language, $categories)
    {
        if (self::checkSheetExist($language)) {
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
            foreach ($categories as $category) {
                $category_row = $category->id + 1;
                $translatedCategoryName = $spreadsheet
                    ->getSheetByName($language)
                    ->getCell('B' . $category_row)
                    ->getValue();
                $category->new_name = $translatedCategoryName;
            }
            return $categories;
        } else {
            return null;
        }
    }

    public static function setProductsNameAndDescriptionForLotByIdAndLang($lots, $language)
    {
        $reader = IOFactory::createReader(self::$inputFileType);
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load(self::$inputFileName);

        foreach ($lots as $lot) {
            $product_row = $lot->product_id + 1;
            $lot->product_name = $spreadsheet
                ->getSheetByName($language)
                ->getCell('H' . $product_row)
                ->getValue();
            $lot->description = $spreadsheet
                ->getSheetByName($language)
                ->getCell('I' . $product_row)
                ->getValue();
        }
        return $lots;
    }

    public static function setProductNameAndDescriptionForLotByIdAndLang($lot, $language)
    {
        $reader = IOFactory::createReader(self::$inputFileType);
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load(self::$inputFileName);

        $product_row = $lot->product_id + 1;
        $lot->product_new_name = $spreadsheet
            ->getSheetByName($language)
            ->getCell('H' . $product_row)
            ->getValue();
        $lot->product_new_description = $spreadsheet
            ->getSheetByName($language)
            ->getCell('I' . $product_row)
            ->getValue();
        return $lot;
    }

    public static function setProductsNameAndDescriptionByIdAndLang($products, $language)
    {
        $reader = IOFactory::createReader(self::$inputFileType);
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load(self::$inputFileName);

        foreach ($products as $product) {
            $product_row = $product->id + 1;
            $product->product_new_name = $spreadsheet
                ->getSheetByName($language)
                ->getCell('H' . $product_row)
                ->getValue();
            $product->product_new_description = $spreadsheet
                ->getSheetByName($language)
                ->getCell('I' . $product_row)
                ->getValue();
        }
        return $products;
    }

    public static function checkSheetExist($language)
    {
        $reader = IOFactory::createReader(self::$inputFileType);
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load(self::$inputFileName);
        if (is_null($spreadsheet->getSheetByName($language))) {
            return 0;
        } else {
            return 1;
        }
    }

    public static function getCompanyInfoByLang($lang)
    {
        if (self::checkSheetExist($lang)) {
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
            $translatedCompanyInfo = [];
            for ($i = 2; $i <= 4; $i++) {
                $translatedParagraph = $spreadsheet
                    ->getSheetByName($lang)
                    ->getCell('M' . $i)
                    ->getValue();
                array_push($translatedCompanyInfo, $translatedParagraph);
            }
            return $translatedCompanyInfo;
        } else {
            return false;
        }
    }

    public static function getFounderInfoByLang($lang)
    {
        if (self::checkSheetExist($lang)) {
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
            $translatedFounderInfo = [];
            for ($i = 10; $i <= 13; $i++) {
                $translatedParagraph = $spreadsheet
                    ->getSheetByName($lang)
                    ->getCell('M' . $i)
                    ->getValue();
                array_push($translatedFounderInfo, $translatedParagraph);
            }
            return $translatedFounderInfo;
        } else {
            return false;
        }
    }

    public static function getCharityInfoByLang($lang)
    {
        if (self::checkSheetExist($lang)) {
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
            $translatedCharityInfo = $spreadsheet
                ->getSheetByName($lang)
                ->getCell('M' . 29)
                ->getValue();
            return $translatedCharityInfo;
        } else {
            return false;
        }
    }

    public static function getPartnershipInfoByLang($lang)
    {
        if (self::checkSheetExist($lang)) {
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
            $translatedPartnershipInfo = [];
            for ($i = 20; $i <= 23; $i++) {
                $translatedParagraph = $spreadsheet
                    ->getSheetByName($lang)
                    ->getCell('M' . $i)
                    ->getValue();
                array_push($translatedPartnershipInfo, $translatedParagraph);
            }
            return $translatedPartnershipInfo;
        } else {
            return false;
        }
    }

    public static function getContactsInfoByLang($lang)
    {
        if (self::checkSheetExist($lang)) {
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
            $translatedContactsInfo = [];
            for ($i = 39; $i <= 42; $i++) {
                $translatedParagraph = $spreadsheet
                    ->getSheetByName($lang)
                    ->getCell('M' . $i)
                    ->getValue();
                array_push($translatedContactsInfo, $translatedParagraph);
            }
            return $translatedContactsInfo;
        } else {
            return false;
        }
    }

    public static function getHeaderSiteNavListByLang($lang)
    {
        if (self::checkSheetExist($lang)) {
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
            $translatedHeaderSiteNavList = [];
            for ($i = 48; $i <= 58; $i++) {
                $translatedNavName = $spreadsheet
                    ->getSheetByName($lang)
                    ->getCell('M' . $i)
                    ->getValue();
                array_push($translatedHeaderSiteNavList, $translatedNavName);
            }
            return $translatedHeaderSiteNavList;
        } else {
            return null;
        }
    }

    public static function setCharityTitleAndPostTextByIdsAndLang($charityPosts, $language)
    {
        $reader = IOFactory::createReader(self::$inputFileType);
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load(self::$inputFileName);

        foreach ($charityPosts as $post) {
            $charityPost_row = $post->id + 1;
            $post->new_title = $spreadsheet
                ->getSheetByName($language)
                ->getCell('Q' . $charityPost_row)
                ->getValue();
            $post->new_post = $spreadsheet
                ->getSheetByName($language)
                ->getCell('R' . $charityPost_row)
                ->getValue();
        }
        return $charityPosts;
    }

}
