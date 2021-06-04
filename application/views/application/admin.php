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
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-12">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">
							<center>Portal Job Bogor</center>
						</div>
						<div class="panel-title">
							<center>Data Pelamar</center>
						</div>
					</div> 
					<br>

					<div class="col-md-12">
						<a href="<?= base_url() ?>logout" class="btn btn-danger btn-xs pull-right" style="margin-left: 10px">
							<span class="glyphicon glyphicon-off"></span> Logout
						</a>
					</div>   

					<br>
				    <table class="table" style="margin-top: 1%;">
						<thead>
							<tr>
								<th>ID</th>
								<th>User Id</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>Nomor Telepon</th>
								<th>Jenis Kelamin</th>
								<th>Posisi</th>
								<th>Status</th>
								<th>Tanggal</th>
								<th class="text-center">Pilihan</th>
							</tr>
						</thead>
							<?php 
								foreach($posts as $post) : 
								
								if($post->status == 0){
									$status_table = "bg-danger";
								}else if($post->status == 1){
									$status_table = "bg-success";
								}else{
									$status_table = "bg-warning";
								}
							?>
							<tr class="<?= $status_table; ?>">
								<td><?= $post->id; ?></td>
								<td><?= $post->user_id; ?></td>
								
								<td><?= $post->name; ?></td>
								<td><?= $post->email; ?></td>
								<td><?= $post->phone; ?></td>
								<td>
									<?php
										if($post->gender = "L"){
											echo "Laki-laki";
										}else{
											echo "Perempuan";
										}
										
									?>
								</td>
								<td><?= $post->position; ?></td>
								<td>
									<?php 
										if($post->status == 2){ 
											echo "Belum diproses";
										}else if($post->status == 1){
											echo "Diterima";
										}else{
											echo "Ditolak";
										}
									?>
								</td>
								<td><?= $post->created_on; ?></td>
								<td class="text-center">
									<?php if($post->status == 2){ ?>
										<a onclick="return confirm('Apakah Anda yakin ingin mengupdate status menjadi terbaca untuk lamaran ini?');" href="update_application/<?php echo $post->id; ?>" class='btn btn-success btn-xs'>
											<span class="glyphicon glyphicon-check"></span> 
										</a> 
									<?php } ?>
									<a href="document/<?php echo $post->document; ?>" target="_blank" class="btn btn-primary btn-xs">
										<span class="glyphicon glyphicon-eye-open"></span> 
									</a>
									<a onclick="return confirm('Apakah Anda yakin ingin menghapus lamaran ini?');" href="delete_application/<?php echo $post->id; ?>" class="btn btn-danger btn-xs">
										<span class="glyphicon glyphicon-remove"></span> 
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>        
					
				</div>
			</div>
		</div>
	</body>
    
</html>