<?php 
	class Search{

		public function searchByName($data,$name){

			$result=array();

			for($i=0;$i<$data->length;$i++){
				//search
				// $result[$j]= xxxx;
			}

			return $result;
		}

		public static function searchByCategory($value){

			$data=recipeEloquent::where('categoryid','=',$value)->get();
			return $data;


		}

		public static function searchByIngre($value){

			$data=recipeEloquent::where('ingretext','LIKE',"%".$value."%")->get();
			$result=array();
			$size=count($data);

			
			for ($i=0; $i <$size ; $i++) { 
				$result[$i]=$data[$i]->id;
			}
					return $result;

		}
	}