<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Delivery extends Model
{
    public static function getDeliveries()
    {
        $deliveries = DB::table('deliveries')->get();
        return $deliveries;
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
