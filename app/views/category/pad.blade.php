@extends('layout')
@section('title')
	<title>Recipe::Stir fry</title>
@stop
@section('body')
	
		<div class="jumbotron">
		  	<h2>ผัด</h2>
		  	<p>ผัดนะจ้ะ</p>
		</div>

                <div class="row">
                @for ($i=0; $i <count($pad) ; $i++) 

                   <?php    $obj1=new Category;
                            $obj2=new User;
                            $cat=$obj1->getById($pad[$i]->categoryid);
                            $username=$obj2->getById($pad[$i]->userid);
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
                            <h3><a href="/recipe/show/{{$pad[$i]->id}}">{{$pad[$i]->name}}</a></h3>
                            <h5>Category: {{$cat->getName()}} </h5>   
                            <h5>Add By: {{$username->getName()}} </h5> 
                            </div>
                    </div>
                @endfor
                </div>
@stop