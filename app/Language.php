<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function description()
    {
        return $this->hasMany('App\Description');
    }
}
