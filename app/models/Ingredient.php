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
	}



 ?>