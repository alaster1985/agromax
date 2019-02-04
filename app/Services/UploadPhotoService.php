<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class UploadPhotoService extends Controller
{
    public $pathFile;
    public $newFileName;

    public function upload(Request $request)
    {
        $image = $request->photo;

        if ($request->getRequestUri() === '/admin/addCategory') {
            $this->pathFile = public_path('images/categories/');
        }
        $this->newFileName = self::getGUID()
            . '.' . $image->getClientOriginalExtension();
        if (!file_exists($this->pathFile)) {
            mkdir($this->pathFile, 0777, true);
        }

        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(275, 180);
        $image_resize->save($this->pathFile . $this->newFileName);
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
