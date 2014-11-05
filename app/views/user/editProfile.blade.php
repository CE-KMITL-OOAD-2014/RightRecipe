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



<form action="{{url('/user/edit').'/'.(Auth::user()->id)}}" method="POST">
						<h3>	Name: </h3>					
						<input class="form-control input-sm" name="name" value="{{$name}}" id="inputSmall" type="text">
						<h3>	Password: </h3>
  												<input class="form-control input-sm" name="password" value="password" id="inputSmall" type="password">
											
				                       		<h3>	E-mail: </h3>
  												<input class="form-control input-sm" name="email" value="{{$email}}" id="inputSmall" type="text">
											
					                        @for ($i=0; $i <count($recipe) ; $i++) 

					                        	<a href="/recipe/show/{{$recipe[$i]->getId()}}">
					                        	{{$recipe[$i]->getName()}}</a>
					                        	
					                        @endfor
					                        <hr>
					               
				            	<input type="submit" class="btn btn-info " value="save">




</form>


@stop


