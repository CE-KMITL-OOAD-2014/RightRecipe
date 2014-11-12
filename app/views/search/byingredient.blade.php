@extends('layout')
@section('title')
<title>RightRecipe::Search By Ingredient</title>
@stop
@section('body')



<div class="jumbotron">	
	<h2>ค้นหาเมนูอาหารจากวัตถุดิบ</h2>
	




	<div class="container">
		<div class="row col-md-offset-4 col-md-4">	
			<form >	
				<input class="form-control" class="input" type="text" name="nsearch" placeholder="ตัวอย่าง: หมู,เต้าหู้,ไข่">
				
				<div class="form-actions">
						<input type="submit" value="Search" class="btn btn-primary" > 
				</div>
			</form>
		</div>
	</div>
</div>






<table class="table table-striped table-hover">


	@if ($searchRecipe==NULL) 
	<tr class="danger">

		<td>ไม่พบรายการอาหารที่ต้องการ</td>
	</tr>	


	@else 
	<thead>
		<tr class="success">
			<th>ลำดับที่</th>
			<th>รายการอาหาร</th>
			<th>โดย</th>
		</tr>
	</thead>

	@for ($i=0; $i <count($searchRecipe) ; $i++) 

	<?php 	 
	$obj=new Recipe;
	$allRecipe=$obj->getById($searchRecipe[$i]);
	$obj1=new User;
	$username=$obj1->getById($allRecipe->getUserId());



	?>


	<tbody>
		<tr>
			<td>{{$i+1}}</td>
			<td><a href="/recipe/show/{{$searchRecipe[$i]}}"> {{$allRecipe->getName()}}</a></td>
			<td>{{$username->getName()}}</td>
		</tr>
	</tbody>
	@endfor
	@endif



</table>

@stop