<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('user/sub/header'); ?>
	<body>
		<?php $this->load->view('user/sub/menu'); ?>

	<div class="container" style="margin-top: 40px;" align="center" style="width: 50%;">
		<?php foreach($query as $u){ ?>
		<?= form_open_multipart('User/update_investor');  ?>
		  <fieldset>
		   <div>
		           <input class="form-control" placeholder="Kd Investor" type="text" name="kd_investor"  readonly value="<?php echo $u->kd_investor ?>">
		      </div><br>
		      	<div>
		           <input class="form-control" placeholder="Nama" type="text" name="nama_investor" value="<?php echo $u->nama_investor ?>"><i style="color: red;"><?= form_error('nama_investor'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="Alamat" type="text" name="alamat" value="<?php echo $u->alamat ?>"><i style="color: red;"><?= form_error('alamat'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="Telepon" type="text" name="no_tlp" value="<?php echo $u->no_tlp ?>"><i style="color: red;"><?= form_error('no_tlp'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="Username" type="text" name="username" value="<?php echo $u->username ?>"><i style="color: red;"><?= form_error('username'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="Password" type="password" name="password" value="<?php echo $u->password ?>"><i style="color: red;"><?= form_error('password'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" type="text" name="level" readonly value="<?php echo $u->level ?>">
		      	</div><br>
			    <div>
		        	  <input class="form-control" type="file" name="foto" value="<?php echo $u->foto ?>">
		      	</div><br>
		        <div>
		        	  <button type="submit" class="btn btn-md btn-info"> Update <span class="glyphicon glyphicon-floppy-save"></span></button>
		      </div>
		  </fieldset>
		</form>
		<?php } ?>
	</div><br><br><br>

   	<?php $this->load->view('footer'); ?>	
	</body>
</html>