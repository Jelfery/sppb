<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable  = [ 
	    'name',
	    'mime',
	    'uploader',
	    'user_id',
	    'label_id'
    ];

    public function user(){
		return $this->belongsTo('App\User');
	}

	public function label(){
		return $this->belongsTo('App\Label');
	}
}
