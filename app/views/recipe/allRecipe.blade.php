@extends('layout')
@section('title')
<title>	Recipe::All Recipe</title>
@stop
@section('body')

<h1>All Recipe</h1>
<div class="row">
	@for ($i=0; $i <count($recipe) ; $i++) 

	<?php $obj1=new Category;
	$obj2=new User;
	$cat=$obj1->getById($recipe[$i]->getCategory());
	$username=$obj2->getById($recipe[$i]->getUserId());
	$score=new RecipeScore;
	$star=$score->getStar($recipe[$i]->getId());


	?>
	<div class="col-sm-4 col-lg-4 col-md-4">
		<img class="img-responsive" src="/upload/recipeImage/{{$recipe[$i]->getImage()}}" alt="" style="max-height:200px  ">
		<div class="caption">
			<div class="ratings">
				<p class="pull-right">
				<!-- create star -->
					@for($j=1;$j<=5;$j++)
					@if($star==NULL)
					<span class="glyphicon glyphicon-star-empty"></span>

					@elseif($j<=$star->getScore())
					<span class="glyphicon glyphicon-star"></span>
					@else 
					<span class="glyphicon glyphicon-star-empty"></span>
					@endif

					@endfor
				</p>
			</div>
			<h3><a href="/recipe/show/{{$recipe[$i]->getId()}}">{{$recipe[$i]->getName()}}</a></h3>
			<h5>Category: {{$cat->getName()}}</h5>   
			<h5>Add By: {{$username->getName()}}</h5> 
		</div>
	</div>
	@endfor
</div>

@stop

