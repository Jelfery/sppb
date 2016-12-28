<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable  = [ 
	    'name',
	    'short_name'
    ];

    protected $table = 'hospitals';
}
