<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reply extends Model
{
    public funtion question()
    {
    	return $this->belongsTo(Question::class);
    }

    public funtion user()
    {
    	return $this->belongsTo(User::class);
    }

    public funtion like()
    {
    	return $this->hasMany(Like::class);
    }
}
