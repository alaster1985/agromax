<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\Exception;
use PhpOffice\PhpSpreadsheet\IOFactory;

class GetExcelDataService extends Controller
{
    public static $inputFileType = 'Xlsx';
    public static $inputFileName = 'translate.xlsx';

    public static function getCategoryNameByLangAndId($language, $categoryId)
    {
        $category_row = $categoryId + 1;
        $reader = IOFactory::createReader(self::$inputFileType);
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load(self::$inputFileName);
        $translatedCategoryName = $spreadsheet
            ->getSheetByName($language)
            ->getCell('B' . $category_row)
            ->getValue();
        return $translatedCategoryName;
    }

    public static function setProductNameAndDescriptionByLangAndId($lots, $language)
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

}
