@extends ('layout')
@section('title')
<title>RightRecipe::Add Recipe</title>
@stop
@section('body')
<h1>Add Recipe</h1>
<div class ="container"/>
<article class="col-xs-12 col-sm-12 col-md-6">
	<form  action="{{url('/recipe/new')}}" method="POST" enctype="multipart/form-data">
		<div class="row">
			<label for="name">Recipe name </label>
		</div>
		<input id="name" class="form-control" class="input" name="name" type="text"size="30"required/><br>
		
		<!--Photo-->
		<div class="form-group">
			<div class="row">
				<label for="image">Photo:</label>
				<input type="file" name="recipeImage" required >
			</div>
		</div>

		<!--Category-->
		<div class="row">
			<label for="category">Category </label>
			<div class="btn-group">
				<select class="form-control" name="category">
					<option name="category" value="1">ต้ม</option>
					<option name="category" value="2">ผัด</option>
					<option name="category" value="3">ทอด</option>
					<option name="category" value="4">นึ่ง</option>
					<option name="category" value="5">ปิ้ง/ย่าง</option>
					<option name="category" value="6">อื่นๆ</option>
				</select>
			</div>
		</div><br>


		<!--Ingredient-->	
		<div class="row ">
			<label for="ingredient">Ingredient </label>
		</div>

		<div class="row col-md-offset-2">
			@for ($i = 1; $i <= 7; $i++)
			<div class="row">
				<div class="col-md-6">
					<input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่{{$i}}">
				</div>
				<div class="col-md-6">
					<input name="capacity[]" type="text" class="form-control" placeholder="ปริมาตร">
				</div>
			</div>

			@endfor	

		</div>


		<!--Process-->
		<div class="row ">
			<label for="step">Process </label>
		</div>
		<textarea type="textarea" name="step" class="form-control" rows="5" required></textarea>
		<br>


		<!--Video-->
		<div class="row ">
			<label for="name">Video URL </label><br>Ex: www.youtube.com/watch?v= <b>KbqYMZ5DkEM</b>
			<input class="form-control" name="video" type="text" placeholder="KbqYMZ5DkEM">

		</div><br>


		
		<div class="form-actions">
			<button type="submit" value="Send" class="btn btn-primary">Submit</button>    
		</div>
	</form> 

</article> 
</div> 

@stop