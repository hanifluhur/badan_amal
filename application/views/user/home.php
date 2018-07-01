<!DOCTYPE html>
<html lang="">
	<head>
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/icon/paper-plane.png'); ?>">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BadanAmal</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

			
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="<?php echo base_URL('css/animate.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_URL('css/icomoon.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_URL('css/bootstrap.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_URL('css/superfish.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_URL('css/style.css'); ?>">
		<script src="<?php echo base_URL('js/modernizr-2.6.2.min.js'); ?>"></script>
	
	</head>
	<body>
		<br>
		<!--navbar-->
		<nav class="navbar navbar-fixed-top navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<br>
					<a class="navbar-brand" href="<?php echo base_url('Controller'); ?>"></a>
				</div>
    			<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<br><br>
								<b>Wellcome, </b><?php echo $this->session->userdata('nama_investor') ?> <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li onclick="return confirm('Anda yakin ingin keluar ?')">
									<a href="<?php echo base_url("Controller/logout"); ?>">Logout <span class="glyphicon glyphicon-log-out pull-right"></span></a>
								</li>
							</ul>
						</li>
						<li><img class="foto-pelanggan img-rounded" src="<?php echo base_url('assets/foto/male.png'); ?><?php echo $this->session->userdata('foto') ?>"></li>
					</ul>
				</div>
			</div>
		</nav>
		<br><br><br>
		<div class="jumbotron text-center">
  		<h1>Badan Amal</h1> 
  		<p>Dompet Dhuafa</p> 
  		<div class="glyphicon glyphicon-heart logo-small"></div>

</div>
</body>
</html>