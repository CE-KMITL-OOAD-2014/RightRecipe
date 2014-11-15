<?php 	
		/**
		* 
		*/
		class CategoryController extends BaseController
		{

			public function getNormal($name){
				//$aa=Input::get('mode');
				if($name=="boil"){
					$id=1;
				}
				elseif($name=="pad"){
					$id=2;
				}
				elseif($name=="fried"){
					$id=3;
				}
				elseif($name=="steam"){
					$id=4;
				}
				elseif($name=="grill"){
					$id=5;
				}
				else{
					$id=6;
				}
				$obj=new Search;
				$cate=$obj->searchByCategory($id);
				$obj1=new Category;
				$obj1=$obj1->getById($id);
				$catName=$obj1->getName();
				$obj2=new RecipeScore;
				$star=array();
				for ($i=0; $i <count($cate) ; $i++) { 
					$star[$i]=$obj2->getStar($cate[$i]->id);
				}

				
				
			return View::make('category.formCategory')->with(
				array("arrCategory"=>$cate,
					"title"=>$catName,
					"star"=>$star));
			}



			// public function getboil(){
			// 	$obj=new Search;
			// 	$cate=$obj->searchByCategory(1);
			// return View::make('category.formCategory')->with(array("arrCategory"=>$cate,"title"=>"ต้ม"));
			// }

			// public function getpad(){
			// 	$obj=new Search;
			// 	$cate=$obj->searchByCategory(2);
			// return View::make('category.category')->with("cate",$cate);
			// }


			// public function getfried(){
			// 	$obj=new Search;
			// 	$cate=$obj->searchByCategory(3);
			// return View::make('category.category')->with("cate",$cate);
			// }

			// public function getsteam(){ 
			// 	$obj=new Search;
			// 	$cate=$obj->searchByCategory(4);
			// return View::make('category.category')->with("cate",$cate);
			// }

			// public function getgrill(){
			// 	$obj=new Search;
			// 	$cate=$obj->searchByCategory(5);
			// return View::make('category.category')->with("cate",$cate);
			// }

			// public function getother(){
			// 	$obj=new Search;
			// 	$cate=$obj->searchByCategory(6);
			// return View::make('category.category')->with("cate",$cate);
			// }


		}

 ?>