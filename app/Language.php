<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function description()
    {
        return $this->hasMany('App\Description');
    }

    public static function getLanguageByCode($code)
    {
        $language = Language::all()->where('code', '=', $code);
        return $language;
    }
}
