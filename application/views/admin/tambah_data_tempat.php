<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('header'); ?>
	<body>
		<?php $this->load->view('admin/sub/menu'); ?>	

	<div class="container" style="margin-top: 40px;" align="center" style="width: 50%;">
		<?= form_open_multipart('Admin/tambah_data_tempat');  ?>
		  <fieldset>
		   <div>
		           <input class="form-control" placeholder="Kd Investor" type="text" name="kd_tempat" value="<?php echo $id_tempat ?>" readonly><i style="color: red;"><?= form_error('kd_tempat'); ?></i>
		      </div><br>
		      	<div>
		           <input class="form-control" placeholder="Nama Tempat" type="text" name="nama_tempat"><?= form_error('nama_tempat'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="Alamat" type="text" name="alamat"><?= form_error('alamat'); ?></i>
		      	</div><br>
		      	<div>
		           <input class="form-control" placeholder="Nama Pengurus" type="text" name="nama_pengurus"><?= form_error('nama_pengurus'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="Telepon" type="text" name="no_tlp"><?= form_error('contact_p'); ?></i>
		      	</div><br>
			    <div>
		        	  <input class="form-control" type="file" name="gambar">
		      	</div><br>
		        <div>
		        	  <button type="submit" class="btn btn-md btn-info"> Tambah <span class="glyphicon glyphicon-floppy-save"></span></button>
		      </div>
		  </fieldset>
		</form>
	</div><br><br><br>

   	<?php $this->load->view('footer'); ?>	
	</body>
</html>