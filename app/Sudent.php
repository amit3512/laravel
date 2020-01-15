<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sudent extends Model
{
    use SoftDeletes;

	protected $dates=['deleted at'];

    protected $fillable =[
    	'name','address','email','mobile','image'
    	];
}
