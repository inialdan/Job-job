<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login - Job Job</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>

	<body>
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">
							<center>Portal Job Bogor</center>
						</div>
						<div class="panel-title">
							<center>Login</center>
						</div>
					</div>     

					<div style="padding-top:30px" class="panel-body" >

						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
							
						<form id="loginform" class="form-horizontal" action="login" role="form" method="post">	
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username">                                        
							</div>
						
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="Login">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										Belum memiliki akun? 
										<a href="register">Daftar disini</a>
									</div>
								</div>
							</div> 
						</form>     

						</div>                     
					</div>  
				</div>
			</div>
		</div>
	</body>
    
</html>