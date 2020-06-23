<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
  //
  public function formation()
  {
    return $this->hasMany('App\formation');
  }
}
