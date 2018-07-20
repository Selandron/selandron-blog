<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
	static public function getAllArticles() {
		return \App\Article::orderBy('created_at', 'desc')->paginate(25);
	}
    static public function getLastArticles($nbr = 5) {
    	return \App\Article::orderBy('created_at', 'desc')->take($nbr)->get();
    }
}
