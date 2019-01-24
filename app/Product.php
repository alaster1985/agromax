<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public static function getProductsByCategory($id)
    {
        return DB::table('products')->where('category_id', '=', $id)->get();
    }

    public static function getProducts()
    {
        return DB::table('products')->get();
    }

    public function category()
    {
        return $this->belongsTo('App/Category');
    }

    public function description()
    {
        return $this->hasMany('App/Description');
    }

    public function lot()
    {
        return $this->hasMany('App/Lot');
    }

    public function order()
    {
        return $this->hasMany('App/Order');
    }
}
