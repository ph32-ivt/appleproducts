<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model
{
	use SoftDeletes;
	protected $fillable = [
		'title','description','rating','product_id','user_id'
	];
	public function product()
	{
		return $this->belongsTo('App\Product');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
