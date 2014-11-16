<?php 
	class RecipeScoreTest extends TestCase{
		public function testCollectScore(){
			$recipescore=array();
			$score=0;
			$expectScore=0;
			for($i=0;$i<10;$i++){
				$score=($i*2);
				$expectScore+=$score;
				$recipescore[$i]['score']=$score;
			}
			$expectScore=$expectScore/10;
			$score=new RecipeScore;
			$result=$score->calScore($recipescore);
			$this->assertEquals($result,$expectScore);
		}
	}
 ?>