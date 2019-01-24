<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    public static function getCategories()
    {
        return DB::table('categories')->get();
    }

    public function product()
    {
        return $this->hasMany('App/Product');
    }
}
