<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable  = [ 
	    'description'
    ];

    protected $table = 'announcements';
}
