<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'name',
        'contact',
    ];

    public static function getSocials()
    {
        $socials = Social::all();
        return $socials;
    }

    public static function getSocialById($id)
    {
        $socialById = Social::find($id);
        return $socialById;
    }

    public static function updateSocial($request)
    {
        $socialToUpdate = Social::find($request->social_id);
        $socialToUpdate->name = $request->name;
        $socialToUpdate->contact = $request->contact;
        $socialToUpdate->disable = $request->disable;
        $socialToUpdate->save();
    }
}
