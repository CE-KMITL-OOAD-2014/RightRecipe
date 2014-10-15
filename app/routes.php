<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'CommentController@showComment');

Route::post('/','CommentController@postComments');

/*
Route::get('/me', function()
{
	return "I'm Batman.";
});

/*
Route::get('/{squirrel}',function($squirrel)
{
	$data['squirrel']=$squirrel;
	return View::make('simple',$data);
});



Route::get('first','MyFirstController@showFirst');
Route::get('second','MyFirstController@showSecond');
Route::get('form','MyFirstController@showForm');
Route::post('result','MyFirstController@showResult');
*/

