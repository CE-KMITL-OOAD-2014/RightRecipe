@extends ('layout')
@section('title')
	<title>RightRecipe::Add Recipe</title>
@stop
@section('body')
	<h1>Add Recipe</h1>
				<div class ="container"/>
					<article class="col-xs-12 col-sm-12 col-md-6">
					 	<form  action="{{url('/recipe/new')}}" method="POST">
							<div class="row">
									<label for="name">Recipe name </label>
							</div>
							<input id="name" class="form-control" class="input" name="name" type="text"size="30"required/><br />
							<div class="form-group">
								<div class="row">
							    		<label for="image">Photo:</label>
							    		<input type="file" name="image">
							  	</div>
						  	</div>

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

							<div class="row ">
								<label for="ingredient">Ingredient </label>
							</div>


							<table>
								<tr><td><input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่1"required><br></td>
									<td><input name="capacity[]" type="text" class="form-control" placeholder="ปริมาตร"required><br></td>
								</tr>								
								<tr><td><input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่2"required><br></td>
									<td><input name="capacity[]" type="text" class="form-control" placeholder="ปริมาตร"required><br></td>
								</tr>
								<tr><td><input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่3"><br></td>
									<td><input name="capacity[]" type="text" class="form-control" placeholder="ปริมาตร"><br></td>
								</tr>
								<tr><td><input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่4"><br></td>
									<td><input name="capacity[]" type="text" class="form-control" placeholder="ปริมาตร"><br></td>
								</tr>
								<tr><td><input name="ingredient[]" type="text" class="form-control" placeholder="วัตถุดิบที่5"><br></td>
									<td><input name="capacity[]" type="text" class="form-control" placeholder="ปริมาตร"><br></td>
								</tr>
							</table>

							<div class="row ">
								<label for="step">Process </label>
							</div>
							<textarea type="textarea" name="step" class="form-control" rows="5" required></textarea>
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
		
@stop