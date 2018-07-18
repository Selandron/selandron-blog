<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function article() { $this->belongsTo('App\Article'); }
    public function author() { $this->belongsTo('App\User'); }
    public function parent() { $this->hasOne('App\Comment', 'parent_id'); }
    public function child() { $this->hasOne('App\Comment', 'child_id'); }
}
