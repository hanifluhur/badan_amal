<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('header'); ?>
	<body>
		<?php $this->load->view('menu'); ?>	

	<div class="container" style="margin-top: 40px;" align="center" style="width: 50%;">
		<?= form_open_multipart('Controller/pendaftaran');  ?>
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
			      <select name="level" id="level" class="form-control" style="height: 45px;">
				      <option value="admin">Admin</option>
				      <option value="user">User</option>
			      </select><br>
			    </div>
			    <div>
		        	  <input class="form-control" type="file" name="foto">
		      	</div><br>
		        <div>
		        	  <button type="submit" class="btn btn-md btn-info"> Daftar <span class="glyphicon glyphicon-floppy-save"></span></button>
		      </div>
		  </fieldset>
		</form>
	</div><br><br><br>

   	<?php $this->load->view('footer'); ?>	
	</body>
</html>