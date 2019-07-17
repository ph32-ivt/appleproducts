<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes;
	protected $fillable = [
		'quantity','total','product_id','order_id'
	];

	public function product()
	{
		return $this->belongsTo('App\Product');
	}

	public function order()
	{
		return $this->belongsTo('App\Order');
	}
}
