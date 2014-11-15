<?php 	
		/**
		* 
		*/
		class CategoryController extends BaseController
		{
			//form std Category
			public function getNormal($name){
				
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

		}

		?>