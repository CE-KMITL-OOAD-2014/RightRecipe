@extends('layout')
@section('title')
	<title>RightRecipe:User Profile</title>
	

@section('body') 
		
		<div class="row">
			<div class="col-md-offset-3 col-md-6 ">
				<div class="panel panel-primary">
						  <div class="panel-heading">
						    <h3 class="panel-title">Profile</h3>
						  </div>

					<!-- Page Content -->	  
						 <div class="panel-body">
								<div class="row" method="show">
									<div class="row">
										<div class="col-md-offset-1 col-md-10  " align="center"> 
										@if($image==NULL)
											<img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle">
												@else
												<img alt="User Pic" src="/upload/profileImage/{{$image}}" width="400px" height="250px"  >
										@endif
							  			</div>
									</div>


									<div class=" col-md-9 col-lg-9 "> 
											<table class="table table-user-information">
											<tbody>
							                    <tr>
							                       <td>Name</td>
							                       <td>{{$name}}</td>		                       
							                    </tr>
							                  
							                    <tr>
							                        <td>Email</td>
							                         <td>{{$email}}</td>		
							                    </tr>
							                    <tr>
							                        <td>My Recipe</td>
							                        <td>
							                        @for ($i=0; $i <count($recipe) ; $i++) 

							                        	<a href="/recipe/show/{{$recipe[$i]->getId()}}">
							                        	{{$recipe[$i]->getName()}}</a>
							                        	
							                        @endfor
							                        </td>
							                    </tr>
							                </tbody>
							            </table>
							    	 </div>

								</div>

							<a href="/user/edit/{{Auth::user()->id}}"> <button type="button" class="btn btn-warning"><but>แก้ไขข้อมูลส่วนต้ว</but></button></a>
						</div>
				</div>
			</div>
		</div>



@stop


