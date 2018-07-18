<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function author() { $this->belongsTo('App\User'); }
    public function comments() { $this->hasMany('App\Comment'); }
    public function categories() { return $this->belongsToMany('App\Category'); }
}
