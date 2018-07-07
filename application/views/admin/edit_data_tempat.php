<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('header'); ?>
	<body>
		<?php $this->load->view('admin/sub/menu'); ?>	

	<?php foreach($query as $u){ ?>	
	<div class="container" style="margin-top: 40px;" align="center" style="width: 50%;">
		<?= form_open_multipart('Admin/update_tempat');  ?>
		  <fieldset>
		   <div>
		           <input class="form-control" placeholder="Kd Tempat" type="text" name="kd_tempat" value="<?php echo $u->kd_tempat ?>" readonly><i style="color: red;"><?= form_error('kd_tempat'); ?></i>
		      </div><br>
		      	<div>
		           <input class="form-control" placeholder="Nama" type="text" name="nama_tempat" value="<?php echo $u->nama_tempat ?>"><?= form_error('nama_tempat'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="Alamat" type="text" name="alamat" value="<?php echo $u->alamat ?>"><?= form_error('alamat'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="Nama Pengurus" type="text" name="nama_pengurus" value="<?php echo $u->nama_pengurus ?>"><?= form_error('nama_pengurus'); ?></i>
		      	</div><br>
		      	<div>
		        	 <input class="form-control" placeholder="Contact" type="text" name="contact_p" value="<?php echo $u->contact_p ?>"><?= form_error('level'); ?></i>
		      	</div><br>
			    <div>
		        	  <input class="form-control" type="file" name="gambar" value="<?php echo $u->gambar ?>" >
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