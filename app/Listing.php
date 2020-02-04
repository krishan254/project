<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
  protected $guarded = ['id'];
  /*  public function agent()
    {
      return $this->belongsTo('App\Agent');
    }*/
}
