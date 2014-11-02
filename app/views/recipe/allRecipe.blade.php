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
						  
					?>
					<div class="col-sm-4 col-lg-4 col-md-4">
						<img class="img-responsive" src="http://placehold.it/700x400" alt="">
							<div class="caption">
								<div class="ratings">
									<p class="pull-right">
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star-empty"></span>
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

@section('footer')

		<div class="row text-center">
			<div class="col-lg-12">
				<ul class="pagination " >
				  <li class="disabled"><a href="#">«</a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">»</a></li>
				</ul>
			</div>
		</div>
@stop
