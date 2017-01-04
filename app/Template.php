<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable  = [ 
	    'name',
	    'uploader',
	    'mime',
	    'label_id'
    ];

    public function label(){
		return $this->belongsTo('App\Label');
	}
}
