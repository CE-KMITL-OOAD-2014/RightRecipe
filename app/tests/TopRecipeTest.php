<?php 
		
	class TopRecipeTest extends TestCase{
		public function testSortRecipe(){

			$arrayScore=array();
			$score=0;

			for($i=0;$i<10;$i++){
				$score=($i*2)+7;
				$arrayScore[$i]=Mockery::mock('RecipeScore');
				$arrayScore[$i]->shouldReceive('getScore')->andReturn($score);

			}

			$toprecipe=new TopRecipe($arrayScore);
			$toprecipe->setScore();
			$result=$toprecipe->sortRecipe();

			$this->assertGreaterThan($result[0]->getScore(),$result[1]->getScore());
			$this->assertGreaterThan($result[1]->getScore(),$result[2]->getScore());
			$this->assertGreaterThan($result[2]->getScore(),$result[3]->getScore());
			$this->assertGreaterThan($result[3]->getScore(),$result[4]->getScore());
			$this->assertGreaterThan($result[4]->getScore(),$result[5]->getScore());
			$this->assertGreaterThan($result[5]->getScore(),$result[6]->getScore());
			$this->assertGreaterThan($result[6]->getScore(),$result[7]->getScore());
			$this->assertGreaterThan($result[7]->getScore(),$result[8]->getScore());
			$this->assertGreaterThan($result[8]->getScore(),$result[9]->getScore());
		}

	}



 ?>