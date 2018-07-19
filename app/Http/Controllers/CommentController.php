<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
   	static public function getLastComments($nbr = 5) {
   		return \App\Comment::orderBy('created_at', 'desc')->take($nbr)->get();
   	}
}
