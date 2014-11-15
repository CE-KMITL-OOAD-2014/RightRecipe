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
		$obj->setCategory(Input::get('category'));
		$obj->setIngredient(Input::get('ingredient'));
		$obj->setStep(Input::get('step'));
		$obj->setVideo(Input::get('video'));
		$obj->setCapacity(Input::get('capacity'));
		$file=Input::file('recipeImage');
		$newfile=time().".".$file->guessExtension();
		$obj->setImage($newfile);
		$file->move(app_path().'/../public/upload/recipeImage/',$newfile);
		$obj->newRecipe();
		RecipeScore::saveAllScore();

		return Redirect::to('/recipe/all');
	}

	//show recipe
	public function getshowrecipe($id)
	{		
		$show=Recipe::getById($id);
		$showComment=Comment::getByRecipe($id);
		$showCategoey=Category::getById($show->getCategory());
		$showStar=new RecipeScore;
		$star=$showStar->getStar($id);
		$username=User::getById($show->getUserId());

		return View::make('recipe.showRecipe')->with(
			array("id"=>$show->getId(),
				"userid"=>$show->getUserId(),
				"username"=>$username->getName(),
				"name"=>$show->getName(),
				"category"=>$showCategoey->getName(),
				"ingredient"=>$show->getIngredient(),
				"capacity"=>$show->getCapacity(),
				"step"=>$show->getStep(),
				"id"=>$show->getId(),
				"image"=>$show->getImage(),
				"video"=>$show->getVideo(),
				"showComment"=>$showComment,
				"star"=>$star->getScore()
				)
			);
	}	

	//show all recipe
	public function getallrecipe()
	{			$recipe=Recipe::getAll();
		return View::make('recipe.allRecipe')->with("recipe",$recipe);
	}

	//edit recipe
	public function geteditrecipe($id)
	{		
		$recipe=Recipe::getById($id);
		$obj1=new Category;
		$username=User::getById($recipe->getUserId());
		$showStar=new RecipeScore;
		$star=$showStar->getStar($id);
		return View::make('recipe.editRecipe')->with(
			array("username"=>$username->getName(),
				"id"=>$recipe->getId(),
				"name"=>$recipe->getName(),
				"category"=>$recipe->getCategory(),
				"ingredient"=>$recipe->getIngredient(),
				"capacity"=>$recipe->getCapacity(),
				"step"=>$recipe->getStep(),
				"image"=>$recipe->getImage(),
				"video"=>$recipe->getVideo(),
				"star"=>$star->getScore()
				)
			);
	}

	public function posteditrecipe($id)
	{
		$edit=Recipe::getById($id);
		$edit->setName(Input::get('name'));
		$mode=Input::get('category');
		if($mode!=0){$edit->setCategory($mode);}
		$edit->setIngredient(Input::get('ingredient'));
		$edit->setCapacity(Input::get('capacity'));
		$edit->setStep(Input::get('step'));
		$edit->setVideo(Input::get('video'));

		$file=Input::file('image');
		if($file!=NULL){
			$newfile=time().".".$file->guessExtension();
			$edit->setImage($newfile);
			$file->move(app_path().'/../public/upload/recipeImage/',$newfile);
		}
		$edit->editRecipe();
		return Redirect::to('/recipe/show/'.$id);
	}

	
	//show top recipe
	public function gettoprecipe()
	{	
		$data=RecipeScore::getAllScore();
		$allScore=new TopRecipe;
		$allScore=$allScore->getSortedRecipe($data);
		return View::make('recipe.topRecipe')->with("sortRecipe",$allScore);
	}



} ?>