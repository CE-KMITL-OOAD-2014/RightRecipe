@extends('layout')
@section('title')
	<title>RightRecipe::Search By Name</title>
@stop
@section('body')

		<div class="jumbotron">	
		<h2>ค้นหาเมนูอาหารจากชื่ออาหาร</h2><br>	
		

		<div class="container">
				<div class="row col-md-offset-4 col-md-4">	
					<form>

					
							<input class="form-control" class="input" id="nsearch" type="text" name="nsearch">
		                    	<div class="form-actions">
									<button type="submit" value="Send" class="btn btn-primary">Search</button>    
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
										$obj=new User;
										$username=$obj->getById($searchRecipe[$i]->getUserId());
								?>
						

				 				<tbody>
					    				<tr>
					      				<td>{{$i+1}}</td>
					      				<td><a href="/recipe/show/{{$searchRecipe[$i]->getId()}}"> {{$searchRecipe[$i]->getName()}}</a></td>
					     				 <td>{{$username->getName()}}</td>
					    				</tr>
				    			</tbody>
						@endfor
				@endif


				
			</table>
				
@stop