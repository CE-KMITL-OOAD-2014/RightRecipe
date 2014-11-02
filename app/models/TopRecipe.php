<?php 

	/**
	*
	*/
	class TopRecipe 
	{
		private $totalScore=array();
		private $topRecipe;
		

		public function getTopRecipe($obj){
			for($i=0;$i<=4;$i++){
			echo $obj->sortMenu($obj->getTotalScore())[$i];
			echo "<br/>";
			}
		}

		// public function getTopRecipe(){
		// 	// sortMenu();
		// 	return $this->$TopRecipe;
		// }

		public function getTotalScore(){
			return $this->recipeid;
		}

		public function setTotalScore($recipeid,$score){
			$this->recipeid[]=$recipeid;
			$this->totalScore[]=$score;
		}

		public function sortMenu($totalScore){
			rsort($totalScore);
			return $totalScore;
		}


	}


 ?>