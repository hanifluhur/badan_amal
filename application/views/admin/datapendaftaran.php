<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('Admin/sub/header'); ?>
	<body>
		<?php $this->load->view('Admin/sub/menu'); ?>

		<!--tabel-->
		<div class="container" style="margin-top: 80px;">
			<div class="table-responsive">
				<table id="tabel-data" class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<td>No</td>
							<td>Kode Transaksi</td>
							<td>Nama Investor</td>
					        <td>Alamat</td>
					        <td>No Telepon</td>
					        <td>Level</td>
					        <td>Foto</td>
					        <td>Aksi</td>

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
				          	<td><?php echo $key->kd_investor ?></td> 
				         	<td><?php echo $key->nama_investor ?></td>
				         	<td><?php echo $key->alamat ?></td> 
				         	<td><?php echo $key->no_tlp ?></td> 
				         	<td><?php echo $key->level ?></td> 
				           	<td><img class="foto" src="<?php echo base_url('assets/foto/') ?><?php echo $key->foto ?>"></td>
				           	<td><center><a href="<?php echo base_url("Admin/hapus_investor/". $key->kd_investor ) ?>" class="btn btn-sm btn-danger active">Hapus</a></td></center> 
				          	      
				        </tr>
				        <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><br><br><br><br><br><br><br><br><br><br><br>
	

<?php $this->load->view('footer'); ?>	
<style type="text/css">
	.foto{ width: 100px; }

</style>
</body>
</html>