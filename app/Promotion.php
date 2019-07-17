<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    use SoftDeletes;
	protected $fillable = [
		'name','code','description','start_date','end_date','unit','value'
	];
	public function products()
	{
		return $this->belongsToMany('App\Product');
	}
}
