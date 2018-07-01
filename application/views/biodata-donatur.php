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
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		
		<!--tabel-->
		<div class="container" style="margin-top: 60px;">
			<a class="btn btn-primary" href="<?php echo base_url('Controller/tambah_bio'); ?>" role="button">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"> Tambah</span><br>
				</a><br>
			<div class="table-responsive">
				<table id="tabel-data" class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<td>No.</td>
							<td>ID</td>
					        <td>Nama</td>
					        <td>Jurusan</td>
					        <td>NIM</td>
					        <td>Alamat</td>
					        <td>Tempat</td>
					        <td>Tanggal lahir</td>
					        <td>Foto</td>
					        <td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 0;
							foreach ($query as $key) { 
							$no++;
						?>
				  		<tr>
				  			<td><?php echo $no ?></td>
				          	<td><?php echo $key->id ?></td> 
				         	<td><?php echo $key->nama ?></td>
				         	<td><?php echo $key->nama_jurusan ?></td> 
				         	<td><?php echo $key->nim ?></td> 
				           	<td><?php echo $key->alamat ?></td>
				           	<td><?php echo $key->tempat ?></td> 
				           	<td><?php echo $key->tgl_lahir ?></td> 
				           	<td><img class="foto" src="<?php echo base_url('assets/foto/'.$key->foto); ?>"></td>              
				           	<td><a href='<?php echo base_url("Controller/edit/".$key->id); ?>'>
				           			<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				           		</a> /         
				           		<a href='<?php echo base_url("Controller/hapus/".$key->id); ?>' onclick="return confirm('Anda yakin hapus ?')">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				           		</a>
				           	</td>       
				        </tr>
				        <?php } ?>
					</tbody>
				</table>
			</div>
		</div><br>


		<style type="text/css">
			.foto{ width: 50px; height: 50px; }
		</style>

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
		<script>
		    $(document).ready(function(){
		        $('#tabel-data').DataTable();
		    });
		</script>

	</body>
</html>