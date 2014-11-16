<?php 	


class SearchController extends BaseController
{
	//search by name
	public  function getrecipe(){
		$data = Input::get('nsearch');
		$recipe = new Search;
		$searchRecipe = $recipe->searchByName($data);
		return View::make('search.byname')->with(array('searchRecipe'=>$searchRecipe));

	}


	//search by ingredient
	public function getingredient(){
		$data = Input::get('nsearch');
		$recipe = new Search;
		$searchRecipe = $recipe->searchByIngre($data);
		
		return View::make('search.byingredient')->with(array('searchRecipe'=>$searchRecipe));
	}

}


 ?>