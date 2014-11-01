@extends ('layout')

@section('title')
        <title> RightRecipe :: Home</title>
@stop

@section('body')
        <h1>แป้งอ้วน</h1>
        
       

        <a href="/newrecipe"> <button type="button" class="btn btn-success">button2</button></a>

            <span class="label label-danger">Label</span>
        <div class="row">
             <div class="col-md-6">
                <a href="/newrecipe"> <button type="button" class="btn btn-success">button1</button></a>
             </div>
             <div class="col-md-6">
                <a href="/newrecipe"> <button type="button" class="btn btn-success">button3</button></a>
             </div>
        </div>
@stop



