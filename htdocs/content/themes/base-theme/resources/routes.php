<?php

/**
 * http://codex.wordpress.org/Conditional_Tags
 */

Route::get('page', function()
{
	return View::make('page');
});

Route::get('template', ['home', function()
{
	return View::make('home');
}]);
	
Route::get('404', function()
{
	return View::make('404');
});