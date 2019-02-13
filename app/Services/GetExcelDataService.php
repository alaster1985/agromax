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
        $categoryId = $categoryId + 1;
        try {
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
        }

        try {
            $cellValue = $spreadsheet
                ->getSheetByName($language)
                ->getCell('B' . $categoryId)
                ->getValue();
        } catch (Exception $e) {
        }
        return $cellValue;
    }

    public static function setProductNameAndDescriptionByLangAndId($lots, $language)
    {
        try {
            $reader = IOFactory::createReader(self::$inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load(self::$inputFileName);
        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
        }

        foreach ($lots as $lot) {
            $product_id = $lot->product_id + 1;
            try {
                $lot->product_name = $spreadsheet
                    ->getSheetByName($language)
                    ->getCell('H' . $product_id)
                    ->getValue();
            } catch (Exception $e) {
            }
            try {
                $lot->description = $spreadsheet
                    ->getSheetByName($language)
                    ->getCell('I' . $product_id)
                    ->getValue();
            } catch (Exception $e) {
            }
        }
        return $lots;
    }

}
