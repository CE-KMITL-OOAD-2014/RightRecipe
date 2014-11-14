@extends ('layout')
@section('title')
<title>RightRecipe::Edit Recipe</title>
@stop
@section('body')

	<script>
			        $(document).ready(function(){
			        	$("#image").hide();
			        	$("#edit").click(function(){
			                $("#image").show();
			            });
			            $("#save").click(function(){
			                $("#image").hide();
			          	});


			            $("#editName").hide();
			            $("#edit").click(function(){
			                $("p").hide();
			                $("#editName").show();
			            });
			            $("#save").click(function(){
			                $("p").show();
			                $("#editName").hide();
			         	 });

			            $("#editProcess").hide();
			            $("#edit").click(function(){
			                $("p").hide();
			                $("#editProcess").show();
			            });
			            $("#save").click(function(){
			                $("p").show();
			                $("#editProcess").hide();
			         	 });

			            $("#editVideo").hide();
			            $("#edit").click(function(){
			                $("p").hide();
			                $("#editVideo").show();
			            });
			            $("#save").click(function(){
			                $("p").show();
			                $("#editVideo").hide();
			         	 });

			            //ingredient capacity

			   

			        });
			    </script>



<form  action="{{url('/recipe/edit/'.$id)}}" method="POST" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
			<div class=" col-md-6 col-md-offset-3" >
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Recipe Name</h3>
					</div>
					<div class="panel-body">
						@if (!Auth::guest()) 
						<input type="submit" class="btn btn-success " value="save">				
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
							<input class="form-control input-sm" name="name" value="{{$name}}" id="inputSmall" type="text">
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

						
						<!--Image-->
						 <div class="row">
							<div class="col-md-3">
								Photo:
							</div>
							<div class="col-md-9">
							<input type="file" name="image" value="{{$image}}"  >
							</div>
						</div><br>


						<!--Category-->
					<div class="row">
						<div class="col-md-3">
							Category:
						</div>
						<div class="col-md-9 btn-group">
										<select class="form-control" name="category">
											<option name="category" value="0">หมวดหมู่</option>
											<option name="category" value="1">ต้ม</option>
											<option name="category" value="2">ผัด</option>
											<option name="category" value="3">ทอด</option>
											<option name="category" value="4">นึ่ง</option>
											<option name="category" value="5">ปิ้ง/ย่าง</option>
											<option name="category" value="6">อื่นๆ</option>
										</select>
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
										<input name="ingredient[]" type="text" class="form-control" value="{{$ingredient[$i]}}" placeholder="ชื่อวัตถุดิบที่{{$i}}">
									</div>
									<div class="col-md-6">
										<input name="ingredient[]" type="text" class="form-control" value="{{ $capacity[$i] }}" placeholder="ปริมาตร">
										
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
								<input class="form-control input-sm" name="step" value="{{$step}}" id="inputSmall" type="text">
							</div>
						</div><br>	

						<!--Photo/clip-->
						<div class="row">
							<div class="col-md-3">
								Photo/Clip:
							</div>
							<div class="col-md-9">
								
								<input class="form-control input-sm" name="video" value="{{$video}}" id="inputSmall" type="text">
								Ex: www.youtube.com/watch?v= <b>KbqYMZ5DkEM</b>
							</div>
						</div><br>
						
					</div>
				</div>
			</div>
		</div>


			

	</div>
</form>

@stop










