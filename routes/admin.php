<?php
Route::group(['middleware' => 'can:adminAccess'], function() {
	Route::prefix('admin')->group(function () {

	    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

	    Route::get('articles/all', 'AdminController@allArticles')->name('all-articles');
	    Route::get('articles/new', 'AdminController@newArticle')->name('new-article');
	    Route::get('articles/my', 'AdminController@myArticles')->name('my-articles');

	    Route::get('users/all', 'AdminController@allUsers')->name('all-users');
	    Route::get('comments/all', 'AdminController@allComments')->name('all-comments');
	});
});