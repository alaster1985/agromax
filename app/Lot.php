<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lot extends Model
{
    public static function getLotsByCategoryId($id)
    {
        $lotsByCategiryId = DB::table('lots')
            ->select('lots.id', 'product_id', 'category_id', 'prod.name', 'prod.photo', 'deliveries.name as delivery',
                'price', 'tons', 'categories.name as category')
            ->join('products as prod', 'product_id', '=', 'prod.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->join('deliveries', 'delivery_id', '=', 'deliveries.id')
            ->where('category_id', '=', $id)
            ->get();
        return $lotsByCategiryId;
    }

    public static function getLots()
    {
        $lots = DB::table('lots')
            ->select('lots.id', 'product_id', 'category_id', 'prod.name', 'prod.photo', 'deliveries.name as delivery',
                'price', 'tons')
            ->join('products as prod', 'product_id', '=', 'prod.id')
            ->join('deliveries', 'delivery_id', '=', 'deliveries.id')
            ->orderBy('prod.name')
            ->get();
        return $lots;
    }

    public static function getLotById($id)
    {
        $lotById = DB::table('lots')->where('lots.id', '=', $id)
            ->select('lots.id', 'products.name as product', 'port_photo', 'tons', 'price', 'deliveries.name as delivery')
            ->join('products', 'product_id', '=', 'products.id')
            ->join('deliveries', 'delivery_id', '=', 'deliveries.id')
            ->get()[0];
        return $lotById;
    }

    public static function makeExclusiveLot($data)
    {
        $exclusiveLot = new ExclusiveLot($data);
        return $exclusiveLot;
    }

    public function delivery()
    {
        return $this->belongsTo('App\Delivery');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
