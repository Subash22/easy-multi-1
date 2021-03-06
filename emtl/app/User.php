<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username',
        'password',
        'usertype'
        // add all other fields
    ];

    //Table name
    protected $table= 'user';

    //Primary key
    public $primaryKey= 'id';

    //Timestamps
    public $timestamps= true;
}
