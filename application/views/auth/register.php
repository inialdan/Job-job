<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Register - Job Job</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>

	<body>
		<div class="container">    
			<div id="registerbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">
							<center>Portal Job Bogor</center>
						</div>
						<div class="panel-title">
							<center>Register</center>
						</div>
					</div>     

					<div style="padding-top:30px" class="panel-body" >

						<div style="display:none" id="register-alert" class="alert alert-danger col-sm-12"></div>
							
						<form id="registerform" class="form-horizontal" action="register" role="form" method="post">	
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
								<input id="register-username" type="text" class="form-control" name="username" value="" placeholder="Username">                                        
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="register-name" type="text" class="form-control" name="name" value="" placeholder="Nama Lengkap">                                        
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input id="register-email" type="email" class="form-control" name="email" value="" placeholder="Alamat Email">                                        
							</div>
						
							<div style="margin-bottom: 15px">
								<select class="form-control" aria-label="Default select example" name="gender" required="required">
									<option value="L">Laki-laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="register-password" type="password" class="form-control" name="password" placeholder="Password">
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-retweet"></i></span>
								<input id="register-password" type="password" class="form-control" name="repassword" placeholder="Ulangi Password">
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<input type="submit" name="register" class="btn btn-primary btn-block btn-lg" value="Daftar">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										Sudah punya akun? 
										<a href="login">Login disini</a>
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