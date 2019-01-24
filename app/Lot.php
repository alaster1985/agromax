<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lot extends Model
{
    public static function getLotsByCategoryId($id)
    {
        return DB::table('lots')
            ->select('lots.id', 'product_id', 'category_id', 'prod.name', 'prod.photo', 'deliveries.name as delivery', 'price', 'tons')
            ->join('products as prod', 'product_id', '=', 'prod.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->join('deliveries', 'delivery_id', '=', 'deliveries.id')
            ->where('category_id', '=', $id)
            ->get();
    }

    public static function getLots()
    {
        return DB::table('lots')
            ->select('lots.id', 'product_id', 'category_id', 'prod.name', 'prod.photo', 'deliveries.name as delivery', 'price', 'tons')
            ->join('products as prod', 'product_id', '=', 'prod.id')
            ->join('deliveries', 'delivery_id', '=', 'deliveries.id')
            ->orderBy('prod.name')
            ->get();
    }

    public function delivery()
    {
        return $this->belongsTo('App/Delivery');
    }

    public function product()
    {
        return $this->belongsTo('App/Product');
    }
}
