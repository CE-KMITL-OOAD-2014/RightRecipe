<?php

// Route::get('Comment','CommentController@getcomment');
// Route::post('Comment','CommentController@postcomment');
// Route::get('/',function(){

// 	$obj = new RecipeScore;
// 	return $obj->calScore(5);
 Route::get('/',function(){



$obj= new TopRecipe;

$obj->setTotalScore(1,7);
$obj->setTotalScore(2,6);
$obj->setTotalScore(3,5);
$obj->setTotalScore(4,4);
$obj->setTotalScore(5,3);
$obj->setTotalScore(6,2);
$obj->setTotalScore(7,1);



return $obj->getTopRecipe($obj);

//$obj->sortMenu($obj->getTotalScore());
//  $obj->setTopRecipe($obj);
//var_dump($obj);
//return $obj->sortMenu($obj->getTotalScore());
//$obj->setTopRecipe($obj);
// $obj->setTotalScore("1");
//var_dump($obj);
// $obj->sortMenu($obj->getTotalScore());
// //var_dump($obj);
//return $obj->getTotalScore();
})

// })
?>