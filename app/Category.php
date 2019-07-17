<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'name','parent_id'
	];

	public function products()
	{
		return $this->hasMany('App\Comment');
	}
	
	public function parent()
    {
        return $this->hasOne('App\Category', 'id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
}
