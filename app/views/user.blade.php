

<!DOCTYPE html>
<html>
<head>
	<title>




	</title>
</head>
<body>
<div>
@extends('layout')
@section('content')
<h2>@foreach ($users as $user )</h2>	
		<p>{{$user->name}}</p>
		@endforeach
		@stop 
		# code...
</div> 
</body>
</html>



