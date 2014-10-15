<!DOCTYPE html>
<html>
	<head>
		<title>HTML fun</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery-1.11.1.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>


	</head>


	<body>
<!--
	<div class="container"/>
		<div class="row"> 
			<div class="col-md-3 col-xs-6 well "></div>
			<div class="col-md-3 col-xs-6 well "></div>
	
		</div>

		<div class="row"> 
			<div class="col-md-3 col-xs-4 well "></div>
			<div class="col-md-3 col-xs-4 well "></div>
			<div class="col-md-3 col-xs-4 well "></div>
		</div>
	</div>
-->
<div class="container"/>
	<div class="row" >
		<div class="panel panel-info">
			<div class="panel-heading well"> Heading</div>
	<div class="panel-body"> 

		<div class="col-md-6 "><img src="p.jpg" width="500" height="300"></div> 
		

		<div class="col-md-6 ">

			<div class="row"> 
				<div  class="col-md-6 col-xs-6  label label-success ">Name</div>
				<div class="col-md-6 col-xs-6  ">EiEi</div>
			</div>

			<div class="row"> 
				<div  class="col-md-6 col-xs-6  label label-warning"  >Surname</div>
				<div class="col-md-6 col-xs-6  ">kiki</div>
			</div>

			<div class="row"> 
				<div  class="col-md-6 col-xs-6  label label-warning"  >Age</div>
				<div class="col-md-6 col-xs-6  ">33</div>
			</div>

			<div class="row"> 
				<div  class="col-md-6 col-xs-6  label label-warning"  >Like</div>
				<div class="col-md-6 col-xs-6  ">dog</div>
			</div>
			
			<div class="row"> 
				<div  class="col-md-6 col-xs-6  label label-warning"  >Hate</div>
				<div class="col-md-6 col-xs-6  ">U</div>
			</div>

		</div>


<!--dive table-->
	
		<div class="row">
		<table border="3">
		<form action="{{url('/')}}" method="POST">
			<tr>
				<td width="200" >NAME: </td>
				<td><input type="text" class="form-control" name="user"></td>
			</tr>
			<tr>
				<td>Comment: </td>
				<td><input type="text" class="form-control" name="comment"></td>
			</tr>
			<tr>
				<td width="200">feeling </td>
				<td><input type="radio" name="feeling" value="like"> Like <br>
		 			<input type="radio" name="feeling" value="hate">Hate<br>
		 			<input type="radio" name="feeling" value="go to hell">Go to Hell
		 		</td>
			</tr>
			<tr>
				<td>Submit: </td>
				<td><input class="btn btn-warning" type="submit"></td>
			</tr>
		</form>
		</table> 
		</div>

	<!--div show comment-->
		<div>
			<h2>Comment</h2>
			@foreach($comments as $comment)
			<div>
				<header>
					{{$comment->user}} is feeling
						{{$comment->feeling}}
					({{$comment->created_at}})
				</header>
				<div>{{$comment->comment}}</div>
			</div>
			<hr>
			@endforeach
		</div>
	 
	</div>

		</div>

	
		
	
</div>
</div>
	</body>
</html>