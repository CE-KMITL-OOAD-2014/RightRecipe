 @extends('layout')
@section('title')
	<title>Recipe::Boil</title>
@stop
@section('body')
	
		<div class="jumbotron">
		  	<h2>ต้ม</h2>
		  	<p>dfghjklertyuiopnm,.</p>
		</div>

                <div class="row">
                @for ($i=0; $i <count($boil) ; $i++) 

                   <?php    $obj1=new Category;
                            $obj2=new User;
                            $cat=$obj1->getById($boil[$i]->categoryid);
                            $username=$obj2->getById($boil[$i]->userid); 
                          
                    ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                            <div class="caption">
                                <div class="ratings">
                                    <p class="pull-right">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            <h3><a href="/recipe/show/{{$boil[$i]->id}}">{{$boil[$i]->name}}</a></h3>
                            <h5>Category: {{$cat->getName()}} </h5>   
                            <h5>Add By: {{$username->getName()}} </h5> 
                            </div>
                    </div>
                @endfor
                </div>
@stop