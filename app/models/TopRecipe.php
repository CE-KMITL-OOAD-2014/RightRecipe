<?php 

	/**
	* 
	*/
	class TopRecipe 
	{
		private $recipeScore;
		private $topRecipe;
		private $allComment;
		function __construct($argument)
		{
			//Send comment to here
			# code...
		}

		function getTopRecipe(){

			calculateScore();
			sortMenu();
			return $this->topRecipe;
		}

		function calculateScore(){
			///$this->allcomment>>>recipescore

		}

		function sortMenu(){
			//recipescore>>sort>>toprecipe
		}
	}


 ?>