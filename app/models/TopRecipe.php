<?php 

	/**
	* 
	*/
	class TopRecipe 
	{
		private $totalScore;
		private $topRecipe;
		private $allComment;
		public function __construct($argument)
		{
			//Send comment to here
			# code...
		}

		public function getTopRecipe(){

			calculateScore();
			sortMenu();
			return $this->topRecipe;
		}


		public function sortMenu(){
			//recipescore>>sort>>toprecipe
		}
	}


 ?>