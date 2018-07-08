<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('header'); ?>
	<body>
		<?php $this->load->view('admin/sub/menu'); ?>	

	<?php foreach($query as $u){ ?>	
	<div class="container" style="margin-top: 40px;" align="center" style="width: 50%;">
		<?= form_open_multipart('admin/update_transaksi');  ?>
		  <fieldset>
		   <div>
		           <input class="form-control" placeholder="Kd Transaksi" type="text" name="kd_transaksi" value="<?php echo $u->kd_transaksi ?>" readonly><i style="color: red;"><?= form_error('kd_transaksi'); ?></i>
		      </div><br>
		      	<div>
		           <input class="form-control" placeholder="Nama" type="text" name="nama_investor" value="<?php echo $u->kd_investor ?>"><?= form_error('nama_investor'); ?></i>
		      	</div><br>
		      	<div>
		           <input class="form-control" placeholder="Nama" type="text" name="nama_tempat" readonly value="<?php echo $u->kd_tempat ?>"><?= form_error('nama_tempat'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="Nominal" type="text" name="nominal" value="<?php echo $u->nominal ?>"><?= form_error('nominal'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="tgl Transaksi" type="date" name="tgl_transaksi" value="<?php echo $u->tgl_transaksi ?>"><?= form_error('tgl_transaksi'); ?></i>
		      	</div><br>
		        	  <button type="submit" class="btn btn-md btn-info"> Update <span class="glyphicon glyphicon-floppy-save"></span></button>
		      </div>
		  </fieldset>
		</form>
		<?php } ?>
	</div><br><br><br>

   	<?php $this->load->view('footer'); ?>	
	</body>
</html>