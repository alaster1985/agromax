<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $fillable = [
        'language_id',
        'product_id',
        'description',
    ];

    public function language()
    {
        return $this->belongsTo('App\Language');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
