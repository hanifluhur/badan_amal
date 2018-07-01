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
		<!--navbar-->
		<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url('Controller'); ?>">Dompet Dhuafa</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<ul class="nav navbar-nav navbar-right">
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Riwayat<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('Controller/biodata_donatur'); ?>">Riwayat Donatur</a></li>
								<li><a href="<?php echo base_url('Controller/biodata_donasi'); ?>">Riwayat Donasi</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Program<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('Controller/pendidikan'); ?>">Pendidikan</a></li>
								<li><a href="<?php echo base_url('Controller/kesehatan'); ?>">Kesehatan</a></li>
								<li><a href="<?php echo base_url('Controller/kemiskinan'); ?>">Kemiskinan</a></li>

							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang Kami<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('Controller/sejarah'); ?>">Sejarah</a></li>
								<li><a href="<?php echo base_url('Controller/visimisi'); ?>">Visi Misi</a></li>
								<li><a href="<?php echo base_url('Controller/profil'); ?>">Profil</a></li>
							</ul>
						</li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
						  <ul class="dropdown-menu">
						    <?php echo form_open('Controller/login')?>
						        <input type="text" class="form-control" placeholder="Username" name="user" autofocus>
						        <input type="password" class="form-control" placeholder="Password" name="pass">
						      <button type="submit" class="btn btn-default" name="login">Login</button>
						    <?php echo form_close()?>
						  </ul>
						</li>
					</ul>
				</div>
			</div>
		</nav



			<div class="container-fluid col-lg-12">
			<div class="jumbotron">
				<div class="container">
					<br><br>
					<h2>Profil Pendidikan</h2>
					<br><br>
					<p>Pendidikan merupakan aset nasional yang berharga dan menjadi tolok ukur kemajuan sebuah bangsa. Pendidikan bisa mengubah individu, dunia dan peradaban.</p>
					<img class="img-thumbnail" src="<?php echo base_url('assets/gambar6.jpg'); ?>">
					<p>Dompet Dhuafa yang ikut ambil bagian dalam perjuangan mencerdaskan bangsa, mendirikan beberapa jejaring dengan beragam program pendidikan gratis serta beasiswa untuk siswa unggul tidak mampu. Telah banyak prestasi yang diukir dan telah banyak lulusan yang terbukti tak kalah dengan lulusan sekolah-sekolah unggul lainnya di Indonesia.</p>
					<p><br>
					</p>
				</div>
			</div>
		</div>

		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!--datatable-->
		<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>


		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>


		<!--JavaScript==================================================================================-->
		

	</body>
</html>