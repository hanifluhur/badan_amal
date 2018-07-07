<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('user/sub/header'); ?>
	<body>
		<?php $this->load->view('user/sub/menu'); ?>

		<!--tabel-->
		<div class="container" style="margin-top: 80px;">
			<div class="table-responsive">
				<table id="tabel-investor" class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<td>No</td>
							<td>Kode Transaksi</td>
							<td>Nama Investor</td>
					        <td>Nama Tempat</td>
					        <td>Nominal</td>
					        <td>Tanggal Transaksi</td>

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
				         	<td><?php echo $key->kd_investor ?></td>
				         	<td><?php echo $key->kd_tempat?></td> 
				         	<td><?php echo $key->nominal?></td> 
				           	<td><?php echo $key->tgl_transaksi?></td>            
				          	      
				        </tr>
				        <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br>

<?php $this->load->view('footer'); ?>	

</div>
</body>
</html

<javascript type="text/javascript">
	$(document).ready(function(){
        $('#tabel-investor').DataTable();
    });
</javascript>