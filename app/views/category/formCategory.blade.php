@extends('layout')
@section('title')
<title>Recipe::Boil</title>
@stop
@section('body')

<div class="jumbotron">
    <h1>{{$title}}</h1>
    
</div>

<div class="row">
    @for ($i=0; $i <count($arrCategory) ; $i++) 
    
    <?php    $obj1=new Category;
    $obj2=new User;
    $cat=$obj1->getById($arrCategory[$i]->categoryid);
    $username=$obj2->getById($arrCategory[$i]->userid); 
    
    ?>
    <div class="col-sm-4 col-lg-4 col-md-4">
        <img class="img-responsive" src="/upload/recipeImage/{{$arrCategory[$i]->image}}" alt="" style="max-height:200px  ">
        <div class="caption">
            <div class="ratings">
                <p class="pull-right">
                    @for($j=1;$j<=5;$j++)
                    
                    @if($j<=$star[$i]->getScore())
                    <span class="glyphicon glyphicon-star"></span>
                    @else 
                    <span class="glyphicon glyphicon-star-empty"></span>
                    @endif

                    @endfor
                </p>
            </div>
            <h3><a href="/recipe/show/{{$arrCategory[$i]->id}}">{{$arrCategory[$i]->name}}</a></h3>
            <h5>Category: {{$cat->getName()}} </h5>   
            <h5>Add By: {{$username->getName()}} </h5> 
        </div>
    </div>
    @endfor
</div>
@stop