<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
	public function author()
	{
    return $this->belongsTo(User::class,'author_id');

     }

     public static function findBySlug($slug)

     {
     	return static::where('slug',$slug);
     }
}
