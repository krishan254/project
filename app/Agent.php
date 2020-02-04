<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function listings()
    {
      return $this->hasMany('App\Listing');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
