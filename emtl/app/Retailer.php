<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    //

    protected $fillable = [
		'name','retailerid','dealer_id', 'address','phone','email'
	];


	 public function dealer(){
        return $this->belongsTo('App\Dealer','id');
    }


      public function group()
    {
        return $this->hasMany('App\Group');
    }



}
