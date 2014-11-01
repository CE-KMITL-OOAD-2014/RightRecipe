<?php 
class RecipeController extends BaseController
{
	public function getnewrecipe()
	{
		return View::make('newRecipe');
	}

	public function gettestnewrecipe()
	{
		return View::make('index');
	}	

	public function postnewrecipe(){

		$obj=new Recipe;
		
		$obj->setName(Input::get('name'));
		$obj->setImage(Input::get('image'));
		$obj->setCategory(Input::get('category'));
		$obj->setIngredient(Input::get('ingredient'));
		$obj->setStep(Input::get('step'));
		$obj->setUserid('123');
		$obj->setCapacity(Input::get('capacity'));
		$obj->newRecipe();
					
		//	return Response::make('/signin');
	}


} ?>