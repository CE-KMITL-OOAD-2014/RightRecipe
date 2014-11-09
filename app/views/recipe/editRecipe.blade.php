@extends ('layout')
@section('title')
<title>RightRecipe::Edit Recipe</title>
@stop
@section('body')


<form  action="{{url('/recipe/edit/{id}')}}" method="POST">
	<div class="container">
		<div class="row">
			<div class=" col-md-6 col-md-offset-3" >
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Recipe Name</h3>
					</div>
					<div class="panel-body">
						@if (!Auth::guest()) 
						<button type="button" class="btn btn-default">แก้ไขเมนูอาหาร55555555</button>					
						@endif
						<div class="row">
							<div class="panel-body">
								<img src="food.jpg" width="100%" height="100%"/>
							</div>
						</div>

						<!--Name-->
						<div class="row">
							<div class="col-md-3">
								Name:
							</div>
							<div class="col-md-9">
								{{$name}}
							</div>
						</div><br>

						<!--Rating-->
						<div class="row">
							<div class="col-md-3">
								Rating:
							</div>
							<div class="col-md-9">
								จุดจุดจุด
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

						<!--Photo/clip-->
						<div class="row">
							<div class="col-md-3">
								Photo/Clip:
							</div>
							<div class="col-md-9">
								คลิป คลิป 
							</div>
						</div><br>
						
					</div>
				</div>
			</div>
		</div>


			<div class="row col-md-6 col-md-offset-3">	
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
</form>

@stop










