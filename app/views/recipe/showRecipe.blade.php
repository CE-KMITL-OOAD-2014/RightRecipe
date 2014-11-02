@extends ('layout')
@section('title')
<title>RightRecipe::Show Recipe</title>
@stop
@section('body')


<form  action="{{url('/recipe/show{id}')}}" method="GET">
	<div class="container">
		<div class="row">
			<div class=" col-md-6" >
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Recipe Name</h3>
					</div>
					<div class="panel-body">
						@if (!Auth::guest()) 
							<button type="button" class="btn btn-default">แก้ไขเมนูอาหาร</button>					
						@endif
						<div class="row">
							<div class="panel-body">
								<img src="food.jpg" width="100%" height="100%"/>
							</div>
						</div>	
 
						<h4>Add by :</h4> <p>{{$name}}</p>
						<h4>Rating :</h4>
						<h4>Ingredeint :</h4>
						@for ($i = 0; $i < count($capacity); $i++)
						<p> {{$ingredient[$i]}}{{ $capacity[$i] }}</p>
						@endfor	
						<h4>Process :</h4> <p>{{$step}}</p>
						<h4>Photo/clip :</h4>
					

						<h4>Comment :</h4>
						<textarea class="form-control" rows="5" ></textarea><br>

						<span class="pull-right">
							<select name="sel0">
								<option value"">Rating</option>
								<option value"1">1</option>
								<option value"2">2</option>
								<option value"3">3</option>
								<option value"4">4</option>
								<option value"5">5</option>
							</select>
							<a  type="button" class="btn btn-sm btn-danger">comment</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>


</form>

@stop










