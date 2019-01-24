<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function status()
    {
        return $this->belongsTo('App/Status');
    }

    public function stage()
    {
        return $this->belongsTo('App/Stage');
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
