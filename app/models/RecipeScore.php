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
    public static function calScore($data){  //$data is array comment
		$size=count($data);
        $result=0;
		if($size==0){return 0;}

		foreach ($data as $key => $value) {
				$result=$result+$value['score']; //Totals for each comment
		}
	   return $result/$size;   //Ave score:1 recipe
    }

    //save score in database table: score
    public function saveScore($recipeid){
            $new=new recipeScoreEloquent;
            $data=commentEloquent::where('recipeid','=',$recipeid)->get();
            $new->score=$this->calScore($data->toArray()); 
            $new->recipeid=$recipeid;
            $new->save();

    }

    //save all score in database
    public static function saveAllScore(){
       
        $callScore=new RecipeScore;
        recipeScoreEloquent::where('recipeid',"<>",0)->delete(); //get all recipe id
        $allRecipe=Recipe::getAll();
        $allScore=array();
        for ($i=0; $i <count($allRecipe) ; $i++) { 
            $allScore[$i]=$callScore->saveScore($allRecipe[$i]->getId());
        }

    }
 

 //get all score from database: result is recipeScore[]
    public static function getAllScore(){ 
        RecipeScore::saveAllScore();
        return recipeScoreEloquent::where('recipeid',"<>",0)->get()->toArray();
    }

   // show star in recipe
     public function getStar($recipeid){
            $data=recipeScoreEloquent::where('recipeid',"=",$recipeid)->get();
            if($data==NULL){
                return NULL;
            } 

            $star=new RecipeScore;
            foreach ($data as $value) {
                $star->score=$value->score;
                $star->recipeid=$value->recipeid;
                 return $star;
            }
               
     }

}

?>