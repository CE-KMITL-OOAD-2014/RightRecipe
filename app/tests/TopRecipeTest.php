<?php 
	class TopRecipeTest extends TestCase{
		public function testSortRecipe(){
			$data=array();
			for($i=0;$i<10;$i++){
				$data[$i]['recipeid']=$i*$i;
				$data[$i]['score']=$i*2;
			}
			$toprecipe=new TopRecipe;
			$result=$toprecipe->getSortedRecipe($data);
			for ($j=0; $j <9 ; $j++) { 
				$this->assertTrue($result[$j]->getScore()>$result[$j+1]->getScore());
			}
		}
	}
 ?>