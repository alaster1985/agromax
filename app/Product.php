<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public static function getProductsByCategoryId($id)
    {
        $productsByCategoryId = DB::table('products')->where('category_id', '=', $id)->get();
        return $productsByCategoryId;
    }

    public static function getProducts()
    {
        $products = DB::table('products')->orderBy('name')->get();
        return $products;
    }

    public static function getProductById($id)
    {
        $product = DB::table('products')->where('products.id', '=', $id)->get();
        return $product;
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function description()
    {
        return $this->hasMany('App\Description');
    }

    public function lot()
    {
        return $this->hasMany('App\Lot');
    }

    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
