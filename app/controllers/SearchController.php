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
		
		$data = Input::get('nsearch');
		
		$recipe = new Search;
		$searchRecipe = $recipe->searchByIngre($data);

		
		
		return View::make('search.byingredient')->with(array('searchRecipe'=>$searchRecipe));
	}

	/*public function postingredient(){

		$data=new Search;
		$result=$data->searchByIngre(Input::get('nsearch'));
		
		

		/*var_dump($data);
		exit();
		
		return Redirect::to('/search/ingredient');
	}*/
	



	


}


 ?>