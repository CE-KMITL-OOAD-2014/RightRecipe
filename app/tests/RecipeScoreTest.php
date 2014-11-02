<?php 

	class RecipeScoreTest extends TestCase{
		public function testCollectScore(){
			$recipescore=array();
			$score=0;
			$expectScore=0;
			for($i=0;$i<10;$i++){
				$score=($i*2);
				$expectScore+=$score;
				$recipescore[$i]=Mockery::mock('Comment');
				$recipescore[$i]->shouldReceive('getScore')->andReturn($score);
			}

			$score=new RecipeScore($recipescore);
			$result=$score->calculateScore();
			$this->assertEquals($result,$expectScore);



		}
	}


	


 ?>