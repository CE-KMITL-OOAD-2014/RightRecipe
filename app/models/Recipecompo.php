<?php
class Recipecompo{
	private $id;
	private $ingredientid;
	private $recipeid;

	public function getId(){
		return $this->id;
	}

	public function getIngredentid(){
		return $this->ingredientid;
	}

	public function setIngredientid($ingredientid){
		$this->ingredientid=$ingredientid;

	}

	public function getRecipeid(){
		return $this->recipeid;
	}

	public function setRecipeid($recipeid){
		$this->recipeid=$recipeid;
	}

	public function newRecipecompo(){
		$new=new recipecompoEloquent;
		$new->ingredientid=$this->ingredientid;
		$new->recipeid=$this->recipeid;
		$new->save();
	}

	public static function getByIngredientid($ingredientid){
		$data=recipecompoEloquent::where('ingredientid','=',$ingredientid)->get();
		if($data==NULL){
                return NULL;
            }   
            
            $size=count($data);

            $recipeid= array( );

            for($i=0;$i<$size;$i++){           
                $obj=new Recipecompo;
                $obj->ingredientid=$data[$i]->ingredientid;
                $obj->recipeid=$data[$i]->recipeid;
                $recipeid[$i]=$obj;
            }
            
            return $recipeid;          
	}
}


?>