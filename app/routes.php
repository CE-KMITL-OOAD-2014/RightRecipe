<?php

Route::get('/',array('before'=>'auth',function(){

	return 'test';
}));
Route::get('signup','UserController@getsignup');
Route::post('signup','UserController@postsignup');

Route::get('signin','UserController@getsignin');
Route::post('/signin',function(){
		$credentials=Input::only('username','password');
		if(Auth::attempt($credentials)){
			return Redirect::intended('/');

		}
		return Redirect::to('signin');
});


Route::get('signout',function(){ 
		Auth::logout();
		return 'logout';
});





Route::get('newrecipe','RecipeController@getnewrecipe');
Route::post('newrecipe','RecipeController@postnewrecipe');

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