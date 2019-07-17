<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'name','price','active','description','product_available','note','category_id','user_id'
	];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function colors()	
	{
		return $this->hasMany('App\Color');
	}

	public function images()
	{
		return $this->morphMany('App\Image', 'imageable');
	}

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}

	public function order_detail()
	{
		return $this->hasOne('App\Order_Detail');
	}

	public function promotions()
	{
		return $this->belongsToMany('App\Promotion');
	}
}
