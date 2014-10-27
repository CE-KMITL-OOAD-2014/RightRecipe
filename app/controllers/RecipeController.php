<?php 
class RecipeController extends BaseController
{
	public function getnewrecipe()
	{
		return View::make('newRecipe');
	}

	public function postnewrecipe(){

		$obj=new Recipe;
		
		$obj->setName(Input::get('name'));
		$obj->setImage(Input::get('image'));
		$obj->setCategory(Input::get('category'));
		$obj->setIngredient(Input::get('ingredient'));
		$obj->setStep(($obj->getIngredient())."\n".(Input::get('step')));
		$obj->setUserid('123');
		$obj->newRecipe();
					
		return Response::make('/signin');
	}


} ?>