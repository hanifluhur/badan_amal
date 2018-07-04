<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('admin/sub/header'); ?>
	<body>
		<?php $this->load->view('admin/sub/menu'); ?>

		<!--tabel-->
		<div class="container" style="margin-top: 80px;">
			<div class="table-responsive">
				<table id="tabel-data" class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<td>No</td>
							<td>Kode Transaksi</td>
							<td>Nama Investor</td>
					        <td>Nama Tempat</td>
					        <td>Nominal</td>
					        <td>Tanggal Transaksi</td>
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
				          	<td><?php echo $key->kd_transaksi ?></td> 
				         	<td><?php echo $key->nama_investor ?></td>
				         	<td><?php echo $key->nama_tempat?></td> 
				         	<td><?php echo $key->nominal?></td> 
				           	<td><?php echo $key->tgl_transaksi?></td>
				           	<td><a href="<?php echo base_url("index.php/Pegawai/update/". $key->kd_transaksi) ?>" class="btn btn-sm  btn-danger active">Edit</a>
                			<a href="<?php echo base_url("index.php/Pegawai/deleteData/". $key->kd_transaksi ) ?>" class="btn btn-sm btn-success active">Hapus</a></td>            
				          	      
				        </tr>
				        <?php } ?>
					</tbody>
				</table>
			</div>
		</div><br>

<?php $this->load->view('footer'); ?>	

</div>
</body>
</html>