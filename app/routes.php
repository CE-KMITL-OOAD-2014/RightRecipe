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
Route::get('/recipe/edit/{id}','RecipeController@geteditrecipe');
Route::post('/recipe/edit/{id}','RecipeController@posteditrecipe');
Route::get('/recipe/top','RecipeController@gettoprecipe');
Route::post('/recipe/show/{id}/comment','CommentController@postcomment');


//Category
Route::get('/category/{id}','CategoryController@getNormal');


//Search
Route::get('/search/name','SearchController@getrecipe');
Route::get('/search/ingredient','SearchController@getingredient');







