<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Right Recipe</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">@import url("http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css");</style>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<h1>Add Recipe</h1>
				<div class ="container"/>
					<article class="col-xs-12 col-sm-12 col-md-6">
					 	<form  action="{{url('newrecipe')}}" method="POST">
							<div class="row">
									<label for="name">Recipe name </label>
									<input id="name" class="form-control" class="input" name="name" type="text" value="" size="30" required /><br />
							</div>
							<div class="form-group">
								<div class="row">
							    		<label for="image">Photo:</label>
							    		<input type="file" name="image">
							  	</div>
						  	</div>

							<div class="row">
									<label for="category">Category </label>
									<div class="btn-group">
										<select class="form-control"  name="category" >
											<option name="category" value="2">ต้ม</option>
											<option name="category" value="1">ผัด</option>
											<option name="category" value="3">ทอด</option>
											<option name="category" value="4">นึ่ง</option>
											<option name="category" value="5">ปิ้ง/ย่าง</option>
											<option name="category" value="6">อื่นๆ</option>
										</select>
									</div>
							</div><br>

							<div class="row ">
								<label for="ingredient">Ingredient </label>
							</div>

												
							<input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่1"><br>
							<input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่2"><br>
							<input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่3"><br>
							<input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่4"><br>
							<input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่5"><br>

							<div class="row ">
								<label for="step">Process </label>
							</div>
							<input type="textarea" name="step" class="form-control" rows="5"required></textarea>
							<br>

							<div class="row ">
								<label for="name">Video URL </label>
								<input class="form-control" type="text" placeholder="Video URL">
							</div><br>


									<!-- <input id="submit_button" type="submit" value="Send email" /> -->
							<div class="form-actions">
								<button type="submit" value="Send" class="btn btn-primary">Submit</button>    
							</div>
						</form> 

					</article> 
				</div> 
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
