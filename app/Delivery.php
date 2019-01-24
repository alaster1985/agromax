<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Delivery extends Model
{
    public static function getCategories()
    {
        return DB::table('deliveries')->get();
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
