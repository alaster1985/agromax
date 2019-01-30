<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    public static function getUpperCategories()
    {
        $categories = DB::table('categories')
            ->where('type', '=', 'upper')
            ->orderBy('name')->get();
        return $categories;
    }

    public static function getLowerCategories()
    {
        $categories = DB::table('categories')
            ->where('type', '=', 'lower')
            ->orderBy('name')->get();
        return $categories;
    }

    public static function getCategories()
    {
        $categories = DB::table('categories')->orderBy('name')->get();
        return $categories;
    }

    public static function getCategoryById($id)
    {
        $categoryById = DB::table('categories')->where('categories.id', '=', $id)->get();
        return $categoryById;
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
