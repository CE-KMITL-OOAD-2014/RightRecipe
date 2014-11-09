<?php 
class RecipeController extends BaseController
{
	public function getnewrecipe()
	{
		return View::make('recipe.newRecipe');
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
					
			return Redirect::to('/recipe/all');
	}

	public function getshowrecipe($id)
	{		$obj=new Recipe;
			$show=$obj->getById($id);
			

		return View::make('recipe.showRecipe')->with(array("name"=>$show->getName(),
			"ingredient"=>$show->getIngredient(),"capacity"=>$show->getCapacity(),"step"=>$show->getStep()));
	}	

	public function getallrecipe()
	{		$obj1=new Recipe;
			$recipe=$obj1->getAll();
		return View::make('recipe.allRecipe')->with("recipe",$recipe);
	}

	

	public function geteditrecipe($id)
	{		$obj=new Recipe;
			$recipe=$obj->getById($id);
		return View::make('recipe.editRecipe')->with(array("name"=>$recipe->getName(),
			"ingredient"=>$recipe->getIngredient(),"capacity"=>$recipe->getCapacity(),"step"=>$recipe->getStep()));
	}

	public function posteditrecipe()
	{
			$obj=new Recipe;
			




		
			return Redirect::to('/recipe/all');
		}

	public function gettoprecipe()
	{
		return View::make('recipe.topRecipe');
	}


} ?>