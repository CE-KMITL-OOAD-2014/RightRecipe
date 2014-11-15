@extends('layout')
@section('title')
<title>RightRecipe:User Profile</title>


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

		$("#editPass").hide();
		$("#edit").click(function(){
			$("p").hide();
			$("#editPass").show();
		});
		$("#save").click(function(){
			$("p").show();
			$("#editPass").hide();
		});

		$("#editMail").hide();
		$("#edit").click(function(){
			$("p").hide();
			$("#editMail").show();
		});
		$("#save").click(function(){
			$("p").show();
			$("#editMail").hide();
		});



	});
</script>



<form action="{{url('/user/edit').'/'.(Auth::user()->id)}}" method="POST" enctype="multipart/form-data">

	<div class="row col-md-offset-3 col-md-6">
		<h1>แก้ไขข้อมูลส่วนตัว</h1><hr>

		<div class="row">
							<div class="panel-body">
								<img src="/upload/profileImage/{{$image}}"style=" max-width:535px" >
							</div>
		</div>


		<!--Edit Name-->
		<div class="row">
			<div class="col-md-3">
				<h4>Name: </h4>	
			</div>
			<div class="col-md-9">
				<input class="form-control input-sm" name="name" value="{{$name}}" id="inputSmall" type="text">
			</div>
		</div><br>


		<!--Edit Profile Picture-->
		<div class="row">
			<div class="col-md-3">
				<h4>Image: </h4>	
			</div>
			<div class="col-md-9">
				<input type="file" name="image" value="{{$image}}"  >
			</div>
		</div><br>


		<!--Edit Password-->
		<div class="row">
			<div class="col-md-3">
				<h4>Password: </h4>	
			</div>
			<div class="col-md-9">
				<input class="form-control input-sm" name="password"  id="inputSmall" type="password">
			</div>
		</div><br>

		<!--Edit Email-->
		<div class="row">
			<div class="col-md-3">
				<h4>Email: </h4>	
			</div>
			<div class="col-md-9">
				<input class="form-control input-sm" name="email" value="{{$email}}" id="inputSmall" type="text">
			</div>
		</div><br>


		
		<!--Show recipe-->
		<div class="row">
			<div class="col-md-3">
				<h4> My recipe:</h4>
			</div>
			<div class="col-md-9">
				@for ($i = 0; $i < count($recipe); $i++)
				<div class="col-md-6">
					<a href="/recipe/show/{{$recipe[$i]->getId()}}">{{$recipe[$i]->getName()}}</a>
				</div>
				@endfor	
				
				
			</div>
		</div><br><hr>
		<input type="submit" class="btn btn-info " value="save">
		
	</div>	

</form>


@stop


