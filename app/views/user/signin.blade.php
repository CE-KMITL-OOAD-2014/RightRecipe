@extends  ('layout')
@section('title')
        <title> RightRecipe :: Sign In</title>
@stop
        

        
</form>


@section('body')
<form  action="{{url('signin')}}" method="POST">
        <div class="form-group">
                 <label class="control-label" for="inputDefault">Username</label>
                 <input class="form-control" name="username" placeholder="username" type="text">
        </div>
        <div class="form-group">
                 <label class="control-label" for="inputDefault">Password</label>
                 <input class="form-control" name="password" placeholder="password" type="password">
        </div>
        <input type="submit" value="Singin">    
   
</form>
@stop
