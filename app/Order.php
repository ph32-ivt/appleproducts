<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
	protected $fillable = [
		'address','phone','street'
	];

	public function order()
	{
		return $this->hasOne('App\Province');
	}

	public function orderDetail()
	{
		return $this->hasMany('App\Order_Detail');
	}
}
