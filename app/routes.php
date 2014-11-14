<?php

//Home
Route::get('/','HomeController@getindex');

//User
Route::get('/signup','UserController@getsignup');
Route::post('/signup','UserController@postsignup');

Route::get('/signin','UserController@getsignin');
Route::post('/signin','UserController@postsignin');

Route::get('/signout','UserController@getsignout');

Route::get('/user/index/{id}','UserController@getindexuser');
Route::get('/user/edit/{id}','UserController@getedituser');
Route::post('/user/edit/{id}','UserController@postedituser');


//Recipe
Route::get('/recipe/new',array('before'=>'auth','uses'=>'RecipeController@getnewrecipe'));
Route::post('/recipe/new','RecipeController@postnewrecipe');

Route::get('/recipe/all','RecipeController@getallrecipe');
Route::get('/recipe/show/{id}','RecipeController@getshowrecipe');
Route::get('/recipe/edit/{id}','RecipeController@geteditrecipe');//ยังไม่ได้ทำ
Route::post('/recipe/edit/{id}','RecipeController@posteditrecipe');//ยังไม่ได้ทำ
Route::get('/recipe/top','RecipeController@gettoprecipe');//ยังไม่ได้ทำ
Route::post('/recipe/show/{id}/comment','CommentController@postcomment');


//Category
Route::get('/category/{id}','CategoryController@getNormal');
// Route::get('/category/pad','CategoryController@getpad');
// Route::get('/category/fried','CategoryController@getfried');
// Route::get('/category/steam','CategoryController@getsteam');
// Route::get('/category/grill','CategoryController@getgrill');
// Route::get('/category/other','CategoryController@getother');


//Search
Route::get('/search/name','SearchController@getrecipe');
Route::get('/search/ingredient','SearchController@getingredient');//ยังไม่ได้ทำ
//Route::post('/search/ingredient','SearchController@postingredient');



Route::get('/search',function(){
		$value=new Search;
		$data=$value->searchByIngre('ข้าว,หมู');
		
});

Route::get('/aa',function(){

		$obj=new RecipeScore;
		
		$eiei=$obj->getStar(4);
		echo $eiei;
		

	


		/*$obj=new RecipeScore;
		$final=$obj->getAllScore();
		echo "$final";*/



});


	// // route to show the login form
	// Route::get('login', array('uses' => 'HomeController@showLogin'));

	// // route to process the form
	// Route::post('/ff', array('uses' => 'HomeController@doLogin'));

