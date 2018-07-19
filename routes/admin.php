<?php
Route::group(['middleware' => 'can:adminAccess'], function() {
	Route::prefix('admin')->group(function () {

	    Route::get('dashboard', function () {
	        return view('admin.dashboard');
	    })->name('dashboard');

	});
});