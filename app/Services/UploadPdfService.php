<?php

namespace App\Services;

use App\Http\Controllers\Controller;

class UploadPdfService extends Controller
{
    public $pathForPresentationPdfFile;
    public $newPresentationPdfFileName;

    public function uploadPresentationPdf($request)
    {
        $this->pathForPresentationPdfFile = public_path('/presentations');
        $this->newPresentationPdfFileName = self::getGUID() . '.pdf';
        $request->pdf->move($this->pathForPresentationPdfFile, $this->newPresentationPdfFileName);
    }

    public static function getGUID()
    {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        } else {
            mt_srand((double)microtime() * 10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                . substr($charid, 0, 8) . $hyphen
                . substr($charid, 8, 4) . $hyphen
                . substr($charid, 12, 4) . $hyphen
                . substr($charid, 16, 4) . $hyphen
                . substr($charid, 20, 12)
                . chr(125);// "}"
            return $uuid;
        }
    }
}
