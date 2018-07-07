<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('user/sub/header'); ?>
	<body>
		<?php $this->load->view('user/sub/menu'); ?>

		<div class="main-container">

		<div class="our-causes fadeIn animated">

	        <div class="container">

	            <h2 class="title-style-1">DONASI<span class="title-under"></span></h2>

	            <div class="row">
				<?php foreach ($query as $key) { ?>
	                <div class="col-md-4 col-sm-4">
	                    <div class="cause">
	                        <img class="cause-img" src="<?php echo base_url('assets/foto/') ?><?php echo $key->gambar ?>">
	                        <div class="progress cause-progress">
	                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
	                            10$ / 500$
	                          </div>
	                        </div>
	                        <h4 class="cause-title"><a href="#"><?php echo $key->nama_tempat ?></a></h4>
	                        <div class="btn-holder text-center">
	                          <a href="<?php echo base_url('User/transaksi/'.$key->kd_tempat); ?>" class="btn btn-primary"> DONASI </a>
	                        </div>
	                    </div>
	            	</div>
	            <?php } ?>
	         	</div>
	        
	   	 	</div>
		</div>
	</div>

	<style type="text/css">
		.cause-img{ width: 500px; height: 250px; }
	</style>

 <?php $this->load->view('footer'); ?>	
</body>
</html>