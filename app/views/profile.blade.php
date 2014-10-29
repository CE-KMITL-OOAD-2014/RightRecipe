<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Right Recipe</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		 <script src="js/jquery-1.10.2.js"></script>

		<style type="text/css">
			.user-row {
			    margin-bottom: 14px;
			}
			.user-row:last-child {
			    margin-bottom: 0;
			}
			.dropdown-user {
			    margin: 13px 0;
			    padding: 5px;
			    height: 100%;
			}
			.dropdown-user:hover {
			    cursor: pointer;
			}
			.table-user-information > tbody > tr {
			    border-top: 1px solid rgb(221, 221, 221);
			}
			.table-user-information > tbody > tr:first-child {
			    border-top: 0;
			}
			.table-user-information > tbody > tr > td {
			    border-top: 0;
			}
			.toppad
			{margin-top:20px;
			}
		</style>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

	 <script>
        $(document).ready(function(){
        	$("#image").hide();
        	$("#edit").click(function(){
                $("#image").show();
            });
            $("#save").click(function(){
                $("#image").hide();
          	});


            $("#editName").hide();
            $("#edit").click(function(){
                $("p").hide();
                $("#editName").show();
            });
            $("#save").click(function(){
                $("p").show();
                $("#editName").hide();
         	 });

            $("#editPass").hide();
            $("#edit").click(function(){
                $("p").hide();
                $("#editPass").show();
            });
            $("#save").click(function(){
                $("p").show();
                $("#editPass").hide();
         	 });

            $("#editMail").hide();
            $("#edit").click(function(){
                $("p").hide();
                $("#editMail").show();
            });
            $("#save").click(function(){
                $("p").show();
                $("#editMail").hide();
         	 });

   

        });
    </script>




		<div class="container">
      		<div class="row">
        		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
         			<div class="panel panel-info">
            			<div class="panel-heading">
              				<h3 class="panel-title">Profile</h3>
            			</div>
            			<div class="panel-body">
            			


            			<div class="row" method="show">
                        <div class="col-xs-offset-10">  <button id="edit">Edit</button> </div>





              				<div class="row">
                				<div class="col-md-3 col-lg-3 " align="center"> 
                					<img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle">
                					<input type="file" id="image">
						  	</div>
                				</div>
                				<div class=" col-md-9 col-lg-9 "> 
                  					<table class="table table-user-information">
                    					<tbody>
						                    <tr>
						                       <td>Name</td>
						                       <td> 
						                       		<p> testssss  </p>
						                       		<form class="form-horizontal"  id="editName" role="form" method="post">
                                <input  type="string"  name="userName" class="form-control" value="testssss" >
                          </form>


						                       </td>
						                       
						                    </tr>
						                    <tr>
						                        <td>Password</td>
						                        <td> 
						                       		<p> testssss  </p>
						                       		<form class="form-horizontal"  id="editPass" role="form" method="post">
                                <input  type="string"  name="userName" class="form-control" value="testssss" >
                          </form>


						                       </td>
						                        
						                    </tr>
						                    <tr>
						                        <td>Email</td>
						                        <td>
						                        	<p> testssss  </p>
						                       		<form class="form-horizontal"  id="editMail" role="form" method="post">
                                <input  type="string"  name="userName" class="form-control" value="testssss" >
                          </form>
						                        </td>
						                        
						                    </tr>
						                    <tr>
						                        <td>My Recipe</td>
						                        <td>123456</td>
						                        
						                    </tr>
						                </tbody>
						            </table>
						            <div class="col-xs-offset-10"> <button id="save" type="submit">Save</button> 
                  </div>
                </form>
					            </div>
					        </div>
					    </div>			         
				    </div>
				</div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
