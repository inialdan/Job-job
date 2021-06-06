<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>application-create - Job Job</title>
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
							<center>Kirim Lamaran</center>
						</div>
					</div>     

					<div style="padding-top:30px" class="panel-body" >

						<div style="display:none" id="application-create-alert" class="alert alert-danger col-sm-12"></div>
							
						<form action="<?= base_url() ?>member_application_create_post" id="loginform" class="form-horizontal" action="application-create" role="form" method="post" enctype="multipart/form-data">	

							<input value="<?= $user->id; ?>" type="hidden" name="user_id">

							<div style="margin-bottom: 15px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="application-create-name" type="text" class="form-control" name="name" value="<?= $user->name ?>" placeholder="Username" readonly required="required">                                        
							</div>
						
							<div style="margin-bottom: 15px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input id="application-create-password" type="text" class="form-control" name="email" value="<?= $user->email ?>" placeholder="email" readonly required="required">
							</div>

							<div style="margin-bottom: 15px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
								<input id="application-create-password" type="text" class="form-control" name="phone" value="" placeholder="Nomor Telepon" required="required"> 
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
								
								<input id="register-email" type="text" class="form-control" name="gender" 
									value="<?php 
											if($user->gender == "L"){ echo "Laki-laki"; }else { echo "Perempuan"; }
										?>"
								 placeholder="Jenis Kelamin" readonly required="required">                                        
							</div>

							<div style="margin-bottom: 15px">
								<select class="form-control" aria-label="Default select example" name="position" required="required">
									<option value="Admin">Admin</option>
									<option value="Operator">Operator</option>
									<option value="Multimedia">Multimedia</option>
								</select>
							</div>

							<div style="margin-bottom: 15px">
								<input type="file" id="file" name="document" accept="image/x-png,image/gif,image/jpeg" required="required">
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<input type="submit" name="create" class="btn btn-primary btn-block btn-lg" value="Kirim Lamaran">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										<a href="<?= base_url() ?>member"><< Kembali</a>
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