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
    
    public static function calScore($recipeid){
    	$data=commentEloquent::where('recipeid','=',$recipeid)->get();
		$size=count($data);
		if($data==NULL){
			return NULL;
		}

		
		$score=NULL;

		for($i=0;$i<$size;$i++){
				$score=$score+$data[$i]->score;
		}
		return $score;
    }
}

?>