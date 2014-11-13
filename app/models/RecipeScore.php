<?php
class RecipeScore{
	private $recipeid;
	private $score;

	public function getRecipeid()
    {
        return $this->recipeid;
    }

     public function setRecipeid($recipeid)
    {
        $this->recipeid = $recipeid;
    }
     
    public function getScore()
    {
        return $this->score;
    }

     public function setScore($score)
    {
        $this->score = $score;
    }
    
    //calulate score
    public static function calScore($recipeid){
    	$data=commentEloquent::where('recipeid','=',$recipeid)->get();
		$size=count($data);
        $result=NULL;
		if($data==NULL){
			return 0;
		}

		for($i=0;$i<$size;$i++){
				$result=$result+($data[$i]->score)/$size;
		}
	       return $result;
    }

    //save score in database
    public function saveScore($recipeid){
            $new=new recipeScoreEloquent;
            $new->recipeid=$recipeid;
            $new->score=$this->calScore($recipeid);
            $new->save();

    }

    //save all score in database
    public function saveAllScore(){
        $callRecipe=new Recipe;
        $callScore=new RecipeScore;
        recipeScoreEloquent::where('recipeid',"<>",0)->delete();
        $allRecipe=$callRecipe->getAll();
        $allScore=array();
        for ($i=0; $i <count($allRecipe) ; $i++) { 
            $allScore[$i]=$callScore->saveScore($allRecipe[$i]->getId());
        }

    }

    //get all score from database: result recipeScore[]
    public function getAllScore(){
        $this->saveAllScore();
       $data=recipeScoreEloquent::where('recipeid',"<>",0)->orderby('score','desc')->get();
        $size=count($data);
          $allScore= array( );

            for($i=0;$i<$size;$i++){           
                $obj=new recipeScore;
                $obj->recipeid=$data[$i]->recipeid;
                $obj->score=$data[$i]->score;
                $allScore[$i]=$obj;
            }
            
            return $allScore; 
     }

     public function getStar($recipeid){
            $data=commentEloquent::where('recipeid','=',$recipeid)->get();
            $star=($this->calScore($recipeid))/count($data);
            return $star;
     }


}

?>