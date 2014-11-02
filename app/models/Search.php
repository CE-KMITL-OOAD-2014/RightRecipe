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

		public function searchByCategory($value){

			$data=recipeEloquent::where('categoryid','=',$value)->get();
			$size=count($data);

            $allrecipe= array( );

             for($i=0;$i<$size;$i++){           
                 $obj=new Recipe;
            //     $obj->id=$data[$i]->id;
                 $obj->setName($data[$i]->getName());
            //     $obj->categoryid=$data[$i]->category;
            //     $obj->ingredient=$data[$i]->ingredient;
            //     $obj->step=$data[$i]->step;
            //     $obj->userid=$data[$i]->userid;
            //     $obj->image=$data[$i]->image;
                 $allrecipe[$i]=$obj;
             }
            
            return $allrecipe;       

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