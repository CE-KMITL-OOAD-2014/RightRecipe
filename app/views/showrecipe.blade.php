<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Right Recipe</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

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

		<style type="text/css">
		@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
		</style>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
      		<div class="row">
        		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
         			<div class="panel panel-info">
            			<div class="panel-heading">
              				<h3 class="panel-title">Recipe Name</h3>
            			</div>
            			<div class="panel-body">
              				<div class="row">
                				<div class="panel-body">
				                  <img src="food.jpg" width="100%" height="100%"/>
				                </div>
                			</div>	

                			<h4>Add by :</h4>
                			<h4>Rating :</h4>
                			<h4>Ingredeint :</h4>
                			<h4>Process :</h4>
                			<h4>Photo/clip :</h4>
                			<h4>Comment :</h4>
                			<textarea class="form-control" rows="5" >
                				
                			</textarea><br>


                			 
                       
                        <span class="pull-right">
                             <select name="sel0">
        				        <option value"">Rating</option>
    					        <option value"1">1</option>
        				        <option value"2">2</option>
        				        <option value"3">3</option>
        				        <option value"4">4</option>
        				        <option value"5">5</option>
						    </select>
                            <a  type="button" class="btn btn-sm btn-danger">comment</a>
                        </span>
                    




                			





                			
					    </div>
					    <!-- ปุ่ม SAVE -->
			            <!-- <div class="panel-footer">
			            	<a href="#" class="btn btn-primary">Save</a>
			            </div> -->
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
