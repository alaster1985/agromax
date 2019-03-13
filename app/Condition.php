<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    public function order()
    {
        return $this->hasMany('App\Order');
    }

    public function lot()
    {
        return $this->hasMany('App\Lot');
    }

    public static function getConditions()
    {
        $conditions = Condition::all()->where('id', '<>', 1);
        return $conditions;
    }
}
