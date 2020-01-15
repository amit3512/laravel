<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static function findBySlug()
    {
    	return static::where('slug',$slug)->first();
    }
}
