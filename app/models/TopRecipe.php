<?php 

	/**
	*
	*/
	class TopRecipe 
	{
		
		public function sortMenu(){
			$obj=new RecipeScore;
			$gg=$obj->getAllScore();

			return $gg;			 
			
		}


	}


 ?>