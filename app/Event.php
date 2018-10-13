<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function User($value='')
    {
    	return $this->belongsTo('App\User');
    }

    public function getDates()
	{
	    return array('created_at', 'updated_at', 'start_at');
	}

	public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
}
