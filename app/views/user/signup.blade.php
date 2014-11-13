@extends ('layout')
@section('title')
        <title> RightRecipe :: Sign Up</title>
@stop

@section('body')
  
<form class="form-horizontal" action="{{url('signup')}}" method="POST" enctype="multipart/form-data">
  <fieldset>
    <legend>สมัครสมาชิก</legend>
    <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputUsername" name='username' placeholder="username" type="text">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" name='email' placeholder="Email" type="text">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" name='password' placeholder="Password" type="password">
      </div>
    </div>

     <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Image</label>
      <div class="col-lg-10">
        <input   name='profileImage' placeholder="Image" type="file">
      </div>
    </div> 

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="submit" class="btn btn-primary" value="Register">
      </div>
    </div>
  </fieldset>
</form>


@stop







