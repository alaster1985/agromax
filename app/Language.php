<?php

namespace App;

use App\Services\GetExcelDataService;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
//    public function description()
//    {
//        return $this->hasMany('App\Description');
//    }

    protected $fillable = [
        'name',
        'code',
        'code_page',
    ];

    public static function getLanguageByCode($code)
    {
        $language = Language::all()->where('code', '=', $code);
        return $language;
    }

    public static function getLanguages()
    {
        $languages = Language::all()->where('disable', '=', 1);
        return $languages;
    }

    public static function getLanguageById($id)
    {
        $LanguageById = Language::find($id);
        return $LanguageById;
    }

    public static function updateLanguage($request)
    {
        $languageToUpdate = Language::find($request->language_id);
        $languageToUpdate->name = $request->name;
        $languageToUpdate->code = $request->code;
        $languageToUpdate->disable = $request->disable;
//        $languageToUpdate->code_page = $request->code_page;
        $languageToUpdate->code_page = 'for' . $request->name;
        $languageToUpdate->save();
    }

    public static function checkLanguageSet($code)
    {
        return boolval(Language::all()
            ->where('disable', '=', 1)
            ->where('code', '=', $code)
            ->count() * GetExcelDataService::checkSheetExist($code));
    }
}
