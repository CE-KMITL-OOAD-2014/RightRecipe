<?php 
class Search{

	

	public function searchByName($name){
		

		$data=recipeEloquent::where('name','LIKE',"%".$name."%")->get();
		$result=array();
		$size=count($data);

		
		for ($i=0; $i <$size ; $i++) { 
			$result[$i]=$data[$i]->id;
		}
		return $result;
	}

	public static function searchByCategory($value){

		$data=recipeEloquent::where('categoryid','=',$value)->get();
		return $data;


	}

	public static function searchByIngre($value){
		$wordIngre=explode(",", $value);

		if(count($wordIngre)<1){
			return NULL;
		}
			$findRecipe=recipeEloquent::where('ingredient','LIKE',"%".$wordIngre[0]."%");
			for($i=1;$i<count($wordIngre);$i++) {
				$findRecipe=$findRecipe->where('ingredient','LIKE',"%".$wordIngre[$i]."%");
			}
			$findRecipe=$findRecipe->get();
		
		$result=array();
		
		for ($i=0; $i <count($findRecipe) ; $i++) { 
			
				$result[$i]=$findRecipe[$i]->id;
			}
		return $result;

	}
}