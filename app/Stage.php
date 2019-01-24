<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function order()
    {
        return $this->hasMany('App/Order');
    }
}
