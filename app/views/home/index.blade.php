@extends ('layout')

@section('title')
<title> RightRecipe :: Home</title>
@stop

@section('body')
<header class="jumbotron ">
  <h1>RightRecipe</h1>
  <p>เว็บไซต์นี้เป็นแหล่งรวบรวมสูตรเมนูอาหาร ที่สามารถค้นหาเมนูได้จากชื่ออาหาร และสามารถค้นหาเมนูได้จากวัตถุดิบที่ใช้ประกอบอาหาร 
    มีระบบสมาชิกที่สามารถเพิ่มเมนูอาหารใหม่ๆลงในระบบ แสดงความคิดเห็นและให้คะแนนกับเมนูอาหารที่ชื่นชอบได้ และเว็บไซต์นี้ยังมีการแสดงเมนู 10 อันดับ ที่ได้รับคะแนนนิยมสูงสุด</p>
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
    @if (count($allLast)<1)
    <div class="alert alert-dismissable alert-warning">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <h4>ขออภัย!</h4>
      <p>ยังไม่มีเมนูใหม่</p>
    </div>
    @else 
    @for($i=0;$i<6&&$i<count($allLast);$i++)
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
      <img class="img-responsive" src="/upload/recipeImage/{{$allLast[$i]->getImage()}}" alt="" style="max-height:200px  ">
      <div class="caption">
        <div class="ratings">
          <p class="pull-right">
           @for($j=1;$j<=5;$j++)
           @if($star==NULL)
           <span class="glyphicon glyphicon-star-empty"></span>

           @elseif($j<=$star->getScore())
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
   @endif  
 </div>





 @stop



