<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url()?>assets/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<p class="lead">
				Sign Up your account</p>
								
							
							<?php
								$pesan = $this->session->flashdata('pesan');
								if($pesan != NULL){
									echo ' <div class="alert alert-danger">'.$pesan.'</div>';
								}

							?>
							<form id="" class="form-auth-small" method="POST" action="<?= base_url()?>index.php/Login_Pelanggan/proses_daftar">
							
							<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
							<input class="input100" type="text" name="nama_pelanggan">
							<span class="focus-input100" data-placeholder="Nama Pelanggan"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
							<input class="input100" type="text" name="alamat">
							<span class="focus-input100" data-placeholder="Alamat"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
							<input class="input100" type="text" name="no_hp">
							<span class="focus-input100" data-placeholder="No Hp"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
							<input class="input100" type="text" name="username">
							<span class="focus-input100" data-placeholder="Username"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Enter password">
							<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="text" name="password">
							<span class="focus-input100" data-placeholder="Password"></span>
							</div>

							<div class="row">
									<div class="col-xs-6">
										<a href="<?= base_url()?>index.php/Login_pelanggan" class="btn btn-primary btn-lg btn-block">KE LOGIN</a>
									</div>
									<div class="col-xs-6">
										<button style="margin-left: 40px;" type="submit" class="btn btn-success btn-lg btn-block" name="simpan" value="Simpan">SIGN UP</button>

									</div>
														
						</form>
					</div>
			</div>
		</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url()?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>assets/js/main.js"></script>

</body>
</html>