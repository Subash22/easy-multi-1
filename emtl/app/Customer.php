<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $guarded = [];

	public function retailer()
	{
		return $this->belongsTo('App\Retailer');
	}
}
