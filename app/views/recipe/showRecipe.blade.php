@extends ('layout')
@section('title')
<title>RightRecipe::Show Recipe</title>
@stop
@section('body')



<div class="container">
	<div class=" col-md-6 col-md-offset-3" >
		<div class="row">

			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Recipe Name</h3>
				</div>
				<div class="panel-body">
					@if(!Auth::guest())
					@if (Auth::user()->id==$userid) 
					<a href="/recipe/edit/{{$id}}"> <button type="button" class="btn btn-default">แก้ไขเมนูอาหาร</button></a>		

					@endif
					@endif
					<div class="row">
						<div class="panel-body">
							<img src="/upload/recipeImage/{{$image}}"style=" max-width:535px" >
						</div>
					</div>

					<!--Name-->
					<div class="row">
						<div class="col-md-3">
							Name:
						</div>
						<div class="col-md-3">
							{{$name}}
						</div>
						<div class="col-md-offset-1 col-md-2">
							Rating:
						</div>
						<div class="col-md-3">
							<div class="ratings">
								<p class="pull-left">
									@for ($i=1; $i <=5 ; $i++) 
									@if($i<=$star)
									<span class="glyphicon glyphicon-star"></span>
									@else
									<span class="glyphicon glyphicon-star-empty"></span>
									@endif
									@endfor
								</p>
							</div>
						</div>
					</div>

					<!--Add By-->
					<div class="row">
						<div class="col-md-3">
							Add By:
						</div>
						<div class="col-md-9">
							{{$username}}
						</div>
					</div><br>


					<!--Category-->
					<div class="row">
						<div class="col-md-3">
							Category:
						</div>
						<div class="col-md-9">
							{{$category}}
						</div>
					</div><br>	


					<!--Ingredeint-->
					<div class="row">
						<div class="col-md-3">
							Ingredeint:
						</div>
						<div class="col-md-9">
							@for ($i = 0; $i < count($capacity); $i++)
							<div class="row">
								<div class="col-md-6">
									{{$ingredient[$i]}}
								</div>
								<div class="col-md-6">
									{{ $capacity[$i] }}
								</div>
							</div>

							@endfor	

						</div>
					</div><br>

					<!--Process-->
					<div class="row">
						<div class="col-md-3">
							Process:
						</div>
						<div class="col-md-9">
							{{$step}}
						</div>
					</div><br>	

					@if($video!=NULL)
					<!--Photo/clip-->
					<div class="row">
						<div class="col-md-3">
							Photo/Clip:
						</div><br>
						<div class="col-md-9">
							<iframe width="535" height="315" src="//www.youtube.com/embed/{{$video}}" frameborder="0" allowfullscreen></iframe>
						</div>
					</div><br>
					<hr>
					@endif


					<!--Comment-->	
					@if(!Auth::guest())
					<form action="{{url('/recipe/show/'.$id.'/comment')}}" method="POST">					
						<div class="row">
							<label>แสดงความคิดเห็น</label>	
							<textarea class="form-control" name="comment" id="textArea" required></textarea>
						</div>


						<div class="row">	
							<div class="col-md-2"> 
								<h4>	 Rating	</h4>
							</div>

							<span class="pull-left col-md-offset-1 col-md-2">
								<select name="score" class="form-control" id="select">
									<option name="score" value="0">0</option>
									<option name="score" value="1">1</option>
									<option name="score" value="2">2</option>
									<option name="score" value="3">3</option>
									<option name="score" value="4">4</option>
									<option name="score" value="5">5</option>
								</select>

							</span> 
							<input type="submit" value="Send" class="btn btn-primary">
						</div>
						
					</form>
					@else 
					<label>แสดงความคิดเห็น</label> 
					กรุณา <a href="/signin"> sign in</a>
					@endif

					<!--show comment-->
					@foreach ($showComment as  $value) 
					<?php 
					$obj=new User;

					$username=$obj->getById($value->getUserId());

					?>



					<div class="row">
						<h4>{{$value->getComment()}}</h4> 
						<h5>{{"โดย: ". $username->getName()}}</h5>


					</div>
					@endforeach


				</div>
			</div>
		</div>
	</div>




</div>


@stop










