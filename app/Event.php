<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Searchable;

    public function User($value='')
    {
    	return $this->belongsTo('App\User');
    }

    public function getDates()
	{
	    return array('created_at', 'updated_at', 'start_at', 'end_at');
	}

	public function comments()
    {
    	return $this->hasMany('App\Comment')->latest();
    }
}
