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
                
                <div class="col-sm-4 col-lg-4 col-md-4">
                <span class="label label-danger">New!!</span>
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
                                        <h3><a href="/recipe/show/{1}">Name</a></h3>
                                        <h5>Category:หมวดหมู่</h5>  
                                        <h5>Add By:username</h5> 
                                </div>
                 </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                 <span class="label label-danger">New!!</span>
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
                                        <h3><a href="/recipe/show/{1}">Name</a></h3>
                                        <h5>Category:หมวดหมู่</h5>  
                                        <h5>Add By:username</h5> 
                                </div>
                 </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                 <span class="label label-danger">New!!</span>
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
                                        <h3><a href="/recipe/show/{1}">Name</a></h3>
                                        <h5>Category:หมวดหมู่</h5>  
                                        <h5>Add By:username</h5> 
                                </div>
                 </div>
        </div>


            

        <!-- <div class="row">
             <div class="col-md-6">
                <a href="/recipe/new"> <button type="button" class="btn btn-success">เพิ่มเมนูอาหาร</button></a>
             </div>
             <div class="col-md-6">
                <a href="/recipe/all"> <button type="button" class="btn btn-success">RecipeAll</button></a>
             </div>
        </div> -->
@stop



