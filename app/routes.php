<?php

Route::get('/', function(){
	// $obj=new Recipe;
	// $obj->setName('ข้าวผัด');
	// $obj->setCategory('ผัด');
	// $obj->setStep('ghjkl;ddd');
	// $obj->setImage('wertyuio');
	// $obj->setUserid('1234');
	

	 // $obj=new Recipe;
	 // $obj->setName('ข้าวผัด');
	 // $obj->setCategory('ผัด');
	 // $obj->setStep('ghjkl;ddd');
	 // $obj->setImage('wertyuio');
	 // $obj->setUserid('1234');
	 // $obj->newRecipe();

	 // return 'eiei';
	
	// $value=Recipe::getByUserId(1234);
	// $value=Recipe::getAll();
	// $size=count($value);
	// for($i=0;$i<$size;$i++){
	
	//   echo $value[$i]->getName();
	//   echo ("\n");
	// };
	
	// $obj=Recipe::getById(1);
	// $obj->setName('ปลากระป๋อง');
	// $obj->editRecipe();


	 
	 // $obj=new Category;
	 // $obj->setName('ปิ้ง/ย่าง');
	 //  $obj->newCategory();
	 // return 'thida';

	// $obj=new Comment;
	// $obj->setScore(5);
	// $obj->setComment('qqqqqqqqqq');
	// $obj->setRecipeid(5);
	// $obj->setUserid(1100);
	// $obj->newComment();

	// $obj1=new Comment;
	// $obj1->setScore(5);
	// $obj1->setComment('qqfffffffff');
	// $obj1->setRecipeid(8);
	// $obj1->setUserid(123);
	// $obj1->newComment();

	// $obj=Comment::getById(1);
	// $obj->setComment('aaaaaaaa');
	// $obj->editComment();
	// return 'aeiou';

	// $obj=Comment::getByRecipe(5);
	// $size=count($obj);
	// for($i=0;$i<$size;$i++){
	// 	echo $obj[$i]->getComment();

	// }

	// $obj=Comment::getById(2);
	// $obj->deleteComment();

	// $obj=new User;
	// $obj->setName('Pure');
	// $obj->setPassword('123456');
	// $obj->setEmail('555');
	// $obj->setImage('eiei');
	// $obj->newUser();
	// $obj=User::getById(3);
	// //var_dump($obj);
	// $obj->setName('eieiei');
	// $obj->editUser();

	$obj=new Ingredient;
	$obj->setName('หมู');
	$obj->newIngredient();
	return 'H';
	





	


});
