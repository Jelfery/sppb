<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable  = [ 
	    'name'
    ];

    protected $table = 'labels';
    public $timestamps = false;

    public function file(){
        return $this->hasMany('App\Record');
    } 

}
