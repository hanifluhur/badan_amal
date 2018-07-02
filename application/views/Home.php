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
					<a class="navbar-brand" href="<?php echo base_url('Controller'); ?>">Dompet Dhuafa	</a>
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
							<li><a href="#" data-target="#my" data-toggle="modal" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
<!-- Modal -->
  <div class="modal fade" id="my" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
        
          <form action="<?php echo base_url('Controller/login') ?>" method="POST" role="form">
          <fieldset>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="user" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="pass" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" name="login" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
              <button type="submit" class="btn btn-danger btn-default pull-left"  style="width: 499px" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          </fieldset>
          </form>

        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="#" data-target="#myDaftar" data-toggle="modal" data-dismiss="modal">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 

  <!-- Modal -->
  <div class="modal fade" id="myDaftar" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Pendaftaran</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
        
          <form action="<?php echo base_url('Controller/login') ?>" method="POST" role="form">
          <fieldset>
           <div>
	               <input class="form-control" placeholder="Kd Investor" type="text" name="kd_investor"><i style="color: red;"><?= form_error('kd_investor'); ?></i>
              </div><br>
	          	<div>
	               <input class="form-control" placeholder="Nama" type="text" name="nama_investor"><i style="color: red;"><?= form_error('nama_investor'); ?></i>
	          	</div><br>
	          	<div>
	            	  <input class="form-control" placeholder="Alamat" type="text" name="alamat"><i style="color: red;"><?= form_error('alamat'); ?></i>
	          	</div><br>
	          	<div>
	            	  <input class="form-control" placeholder="Telepon" type="text" name="no_tlp"><i style="color: red;"><?= form_error('no_tlp'); ?></i>
	          	</div><br>
	          	<div>
	            	  <input class="form-control" placeholder="Username" type="text" name="username"><i style="color: red;"><?= form_error('username'); ?></i>
	          	</div><br>
	          	<div>
	            	  <input class="form-control" placeholder="Password" type="password" name="password"><i style="color: red;"><?= form_error('password'); ?></i>
	          	</div><br>
	            <div>
	            	  <button type="submit" class="btn btn-md btn-info"> Daftar <span class="glyphicon glyphicon-floppy-save"></span></button>
              </div>
          </fieldset>
          </form>

        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="#" data-target="#my" data-toggle="modal">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 

		<!--carousel-->
		<div class="container" style="margin-top: 60px; width: 100%;">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" src="<?php echo base_url('assets/carousel/gambar1.jpg'); ?>">
						<div class="container">
							<div class="carousel-caption" style="margin-bottom: 260px;">
								<h1>DONATE FOR THE POOR CHILDREN</h1>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">DONATE NOW</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" src="<?php echo base_url('assets/carousel/gambar2.jpg'); ?>">
						<div class="container">
							<div class="carousel-caption" style="margin-bottom: 260px;">
								<h1>DONATE FOR THE POOR CHILDREN</h1>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">LEARN MORE</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" src="<?php echo base_url('assets/carousel/gambar3.jpg'); ?>">
						<div class="container">
							<div class="carousel-caption" style="margin-bottom: 260px;">
								<h1>DONATE FOR THE POOR CHILDREN</h1>
								<p><a class="btn btn-lg btn-primary" href="#" role="button">BROWSE GALLERY</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div><br>
		</div>

		<div id="fh5co-features" fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>Profil Dompet Dhuafa</h3>
						<p>Dompet Dhuafa adalah lembaga milik masyarakat Indonesia yang berkhidmat mengangkat harkat sosial kemanusiaan kaum dhuafa dengan dana. Dompet Dhuafa akan terus mewujudkan masyarakat berdaya yang bertumpu pada sumber daya lokal melalui sistem yang berkeadilan</p>
					</div>
				</div>

<div id="fh5co-features" fh5co-feature-product">
			<div class="container">
				<div class="row">
					<center><h1>Program Kerja</h1></center>
						<br><br>
					<div class="col-md-4">
						<div class="feature-left">
							<div class="feature-copy">
								<h3>Pendidikan</h3>
								<p>Masa depan Indonesia yang lebih baik ada di tangan anak-anak. Dompet Dhuafa membantu mewujudkannya dengan memberikan program beasiswa bagi anak-anak Indonesia yang tidak mampu.</p>
								<p><a href=""></a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							</span>
							<div class="feature-copy">
								<h3>Kesehatan</h3>
								<p>Dompet Dhuafa di dalam program kesehatan, mendirikan berbagai lembaga kesehatan yang bertujuan untuk melayani seluruh mustahik dengan sistem yang mudah dan terintegrasi dengan sangat baik</p>
								<p><a href=""></a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							</span>
							<div class="feature-copy">
								<h3>Ekonomi</h3>
								<p>Untuk memutus lingkaran kemiskinan di Indonesia, Dompet Dhuafa merangkul masyarakat di seluruh daerah dengan berbagai program pemberdayaan, agar terciptanya entrepreneur dan lapangan kerja baru</p>
								<p><a href=""></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		
		


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>