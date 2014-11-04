<?php 	
		/**
		* 
		*/
		class CategoryController extends BaseController
		{
			public function getboil(){
				$obj=new Search;
				$boil=$obj->searchByCategory(1);
			return View::make('category.boil')->with("boil",$boil);
			}

			public function getpad(){
				$obj=new Search;
				$pad=$obj->searchByCategory(2);
			return View::make('category.pad')->with("pad",$pad);
			}

			public function getfried(){
				$obj=new Search;
				$fried=$obj->searchByCategory(3);
			return View::make('category.fried')->with("fried",$fried);
			}

			public function getsteam(){
				$obj=new Search;
				$steam=$obj->searchByCategory(4);
			return View::make('category.steam')->with("steam",$steam);
			}

			public function getgrill(){
				$obj=new Search;
				$grill=$obj->searchByCategory(5);
			return View::make('category.grill')->with("grill",$grill);
			}

			public function getother(){
				$obj=new Search;
				$other=$obj->searchByCategory(6);
			return View::make('category.other')->with("other",$other);
			}


		}

 ?>