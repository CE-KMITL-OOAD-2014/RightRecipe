<?php 

	/**
	*
	*/
	class TopRecipe 
	{


		
		public function getSortedRecipe($data){
			 function cmp($a,$b){
				if ($a['score'] == $b['score']) {
					return 1;
				}
				return ($a['score'] < $b['score']) ? 1 : -1;
			}

			

		usort($data, "cmp");


		$size=count($data);
		$allScore= array( );

		for($i=0;$i<$size;$i++){           
			$obj=new recipeScore;
			$obj->setRecipeid($data[$i]['recipeid']);
			$obj->setScore($data[$i]['score']);
			$allScore[$i]=$obj;
		}

		return $allScore; 
	}





}


?>