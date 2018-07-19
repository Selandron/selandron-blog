<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
    	$articles = ArticleController::getLastArticles();
    	$comments = CommentController::getLastComments();
    	return view('admin.dashboard')->with(['lastArticles' => $articles, 'lastComments' => $comments]);
    }
}
