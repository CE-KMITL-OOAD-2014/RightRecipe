<?php 	

/**
* 
*/
class SearchController extends BaseController
{
	public  function getrecipe(){
		$data = Input::get('nsearch');
		$recipe = new Search;
		$searchRecipe = $recipe->searchByName($data);
		
		
		return View::make('search.byname')->with(array('searchRecipe'=>$searchRecipe));

	}

	public function getingredient(){

			return View::make('search.byingredient');
	}
	



	


}


 ?>