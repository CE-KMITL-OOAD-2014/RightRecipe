@extends('layout')
@section('title')
		<title>	Recipe::TopRecipe</title>
@stop
@section('body')
		
		<div class="jumbotron">
		  <h2>เมนูยอดนิยม</h2>
		  <p>dfghjklertyuiopnm,.</p>
		</div>
	

			 <div class="row">
             @for ($i=0; $i <10 ; $i++) 
             <?php 
                            $obj1=new Category;
                            $obj2=new User;
                            $callRecipe=new Recipe;
                            $allTop[$i]=$callRecipe->getById($sortRecipe[$i]->getRecipeid());
                            $cat=$obj1->getById($allTop[$i]->getCategory());
                            $username=$obj2->getById($allTop[$i]->getUserId());
                           

                          
                    ?>
                
                <div class="col-sm-4 col-lg-4 col-md-4">
                        <img class="img-responsive" src="/upload/recipeImage/{{$allTop[$i]->getImage()}}" alt="" style="max-height:300px  ">
                            <div class="caption">
                                <div class="ratings">
                                    <p class="pull-right">
                                    @for($j=1;$j<=5;$j++)
                                    @if($j<=$sortRecipe[$i]->getScore())
                                            <span class="glyphicon glyphicon-star"></span>
                                    @else 
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                    @endif
                                    @endfor
                                    </p>
                                </div>
                            <h3><a href="/recipe/show/{{$allTop[$i]->getId()}}">{{$allTop[$i]->getName()}}</a></h3>
                            <h5>Score: {{$sortRecipe[$i]->getScore()}}</h5>  
                            <h5>Category: {{$cat->getName()}}</h5>   
                            <h5>Add By: {{$username->getName()}}</h5> 
                            </div>
                    </div>
                    @endfor
            </div>	  
		


@stop