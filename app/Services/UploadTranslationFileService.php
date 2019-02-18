<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadTranslationFileService extends Controller
{
    public $pathForTranslationFile;
    public $newTranslationFileName;
    public function uploadTranslationFile(Request $request)
    {
        $this->pathForTranslationFile = public_path('/translation');
        $this->newTranslationFileName = basename($request->translation->getClientOriginalName());
        $request->translation->move($this->pathForTranslationFile, $this->newTranslationFileName);

    }
}
