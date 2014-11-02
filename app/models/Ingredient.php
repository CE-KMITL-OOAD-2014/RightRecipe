<?php
	class Ingredient{
		private $id;
		private $name;

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			$this->name=$name;
		}

		public function getId(){
			return $this->id;
		}

		public function newIngredient(){
			$obj=new ingredientEloquent;
			$obj->name=$this->name;
			$obj->save();
		}

		public function findIngredtent($name){
			$data=ingredientEloquent::find($name);
			var_dump($data);
           
            if($data==NULL){
            	$obj=new ingredientEloquent;
				$obj->name=$this->name;
				$obj->save();
            }   
            
            return NULL;
		}


	}



 ?>