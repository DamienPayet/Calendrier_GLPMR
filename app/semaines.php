<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semaines extends Model
{
  //
  public function semaines()
  {
    return $this->hasMany('App\semaines');
  }
}
