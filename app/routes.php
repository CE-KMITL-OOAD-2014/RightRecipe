<?php

Route::get('/', function(){

	$obj=new Recipe;
	$obj->setName("THISISNAME");



	$myFood='ข้าวมันไก่'
	$searchObj=new Search;
	$result=$searchObj->searchByName($data,$myFood);

	return $obj->getName();
});
