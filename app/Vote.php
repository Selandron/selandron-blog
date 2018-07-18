<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function author() { $this->hasOne('App\User'); }
    public function comment() { $this->hasOne('App\comment'); }
}
