<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    public function language()
    {
        return $this->belongsTo('App/Language');
    }

    public function product()
    {
        return $this->belongsTo('App/Product');
    }
}
