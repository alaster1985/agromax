<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'type',
    ];

    public static function getUpperCategories()
    {
        $categories = DB::table('categories')
            ->where('type', '=', 'upper')
            ->orderBy('name')
            ->get();
        return $categories;
    }

    public static function getLowerCategories()
    {
        $categories = DB::table('categories')
            ->where('type', '=', 'lower')
            ->orderBy('name')
            ->get();
        return $categories;
    }

    public static function getCategories()
    {
        $categories = Category::all()
            ->where('id', '<>', 1)
            ->sortBy('name');
        return $categories;
    }

    public static function updateCategory($request)
    {
        $categoryToUpdate = Category::find($request->category_id);
        $categoryToUpdate->name = $request->name;
        $categoryToUpdate->type = $request->type;
        $categoryToUpdate->save();
    }

    public static function getCategoryById($id)
    {
        $categoryById = Category::find($id);
        return $categoryById;
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
