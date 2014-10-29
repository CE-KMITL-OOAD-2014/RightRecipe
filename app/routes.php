<?php

Route::get('/',array('before'=>'auth',function(){

	return Auth::user()->id;
}));
Route::get('signup','UserController@getsignup');
Route::post('signup','UserController@postsignup');

Route::get('signin','UserController@getsignin');
Route::post('signin','UserController@postsignin');

Route::get('signout','UserController@getsignout');


Route::get('newrecipe','RecipeController@getnewrecipe');
Route::post('newrecipe','RecipeController@postnewrecipe');

Route::get('/a','UserController@showuser');

Route::get('/search',function(){
		$value=Search::searchByIngre('ถั่ว');
		var_dump($value);
});

Route::get('/aa',function(){
		$obj=new Search;
		var_dump($obj->searchByCategory(0));



});


	// // route to show the login form
	// Route::get('login', array('uses' => 'HomeController@showLogin'));

	// // route to process the form
	// Route::post('/ff', array('uses' => 'HomeController@doLogin'));