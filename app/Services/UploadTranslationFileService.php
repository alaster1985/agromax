<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadTranslationFileRequest;

class UploadTranslationFileService extends Controller
{
    public $pathForTranslationFile;
    public $newTranslationFileName;
    public function uploadTranslationFile($request)
    {
        $this->pathForTranslationFile = public_path('/translation');
        $this->newTranslationFileName = 'translate.xlsx';
        $request->translation->move($this->pathForTranslationFile, $this->newTranslationFileName);
    }
}
