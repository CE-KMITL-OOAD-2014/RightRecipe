@extends ('layout')

@section('title')
<title> RightRecipe :: Home</title>
@stop

@section('body')
<header class="jumbotron ">
    <h1>RightRecipe</h1>
    <p>เป็นเว็บไซต์ค้นหาเมนูอาหารจาก วัตถุดิบ และสามารถค้นหาเมนูอาหารจาก ชื่ออาหาร มีระบบสมาชิก ทำให้สามารถดูรายการเมนูอาหารที่ชื่นชอบ</p>
    <p>
        <div class="col-md-6">
            <a class="btn btn-primary btn-large " href="/recipe/all">เมนูอาหารทั้งหมด!</a></p>
        </div>
        @if (!Auth::guest()) 
        <div class="col-md-6">
         <a href="/recipe/new"> <button type="button" class="btn btn-success ">เพิ่มเมนูอาหาร</button></a>
     </div>
     @endif
     
 </header>
 
 <hr>
 <!-- Title -->
 <div class="row">
    <div class="col-lg-12">
        <h3>เมนูล่าสุด</h3>
    </div>
</div>
<!-- /.row -->
<!-- Page Features -->


<div class="row">
    @for($i=0;$i<6;$i++)
    <?php 
    $obj1=new Category;
    $obj2=new User;
    $cat=$obj1->getById($allLast[$i]->getCategory());
    $username=$obj2->getById($allLast[$i]->getUserId());
    $score=new RecipeScore;
    $star=$score->getStar($allLast[$i]->getId());


    
    ?>
    <div class="col-sm-4 col-lg-4 col-md-4">
        <span class="label label-danger">New!!</span>
        <img class="img-responsive" src="/upload/recipeImage/{{$allLast[$i]->getImage()}}" alt="" style="max-height:300px  ">
        <div class="caption">
            <div class="ratings">
                <p class="pull-right">
                @for($j=1;$j<=5;$j++)
                @if($j<$star->getScore())
                <span class="glyphicon glyphicon-star"></span>
                @else 
                <span class="glyphicon glyphicon-star-empty"></span>
                @endif
                @endfor
                </p>
            </div>
            <h3><a href="/recipe/show/{{$allLast[$i]->getId()}}">{{$allLast[$i]->getName()}}</a></h3>
            
            <h5>Category: {{$cat->getName()}}</h5>   
            <h5>Add By: {{$username->getName()}}</h5> 
        </div>
    </div>
    @endfor
    
</div>





@stop



