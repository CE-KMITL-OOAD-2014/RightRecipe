<?php

Route::get('/',array('before'=>'auth',function(){

	return 'test';
}));
Route::get('signup','UserController@getsignup');
Route::post('signup','UserController@postsignup');

Route::get('signin','UserController@getsignin');


Route::get('signout',function(){
		Auth::logout();
		return 'logout';
});

Route::post('/signin',function(){
		$credentials=Input::only('username','password');
		if(Auth::attempt($credentials)){
			return Redirect::intended('/');
		}
		return Redirect::to('signin');
});








	// // route to show the login form
	// Route::get('login', array('uses' => 'HomeController@showLogin'));

	// // route to process the form
	// Route::post('/ff', array('uses' => 'HomeController@doLogin'));