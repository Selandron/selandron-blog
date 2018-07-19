<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function author() { return $this->hasOne('App\User'); }
    public function comment() { return $this->hasOne('App\comment'); }

    public $timestamps = false;
}
