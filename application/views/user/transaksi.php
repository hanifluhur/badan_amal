<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('header'); ?>
	<body>
		<?php $this->load->view('user/sub/menu'); ?>	
	<?php foreach($query as $u){ ?>	
	<div class="container" style="margin-top: 40px;" align="center" style="width: 50%;">
		<?= form_open_multipart('user/simpan_transaksi');  ?>
		  <fieldset>
		   <div>
		           <input class="form-control" type="text" name="kd_transaksi" value="<?php echo $kd_transaksi ?>" readonly><i style="color: red;"><?= form_error('kd_transaksi'); ?></i>
		      </div><br>
		      	<div>
		           <input class="form-control" type="text" name="kd_investor" value="<?php echo $nama_user ?>" readonly><?= form_error('nama_investor'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" type="text" name="kd_tempat" value="<?php echo $u->nama_tempat ?>" readonly><?= form_error('kd_tempat'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" type="text" name="nominal"><?= form_error('nominal'); ?></i>
		      	</div><br>
		      	<div>
		        	  <input class="form-control" placeholder="tgl_transaksi" type="date" name="tgl_transaksi"><?= form_error('tgl_transaksi'); ?></i>
		      	</div><br>
  				<div>
		        	  <button type="submit" class="btn btn-md btn-info" id="print" onClick="popup_print()"> Donasi <span class=""></span></button>
		      </div>
		  </fieldset>
		</form>
		<?php } ?>
	</div><br><br><br>
	
   	<?php $this->load->view('footer'); ?>	
	</body>
</html>