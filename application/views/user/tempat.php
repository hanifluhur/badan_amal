<!DOCTYPE html>
<html lang="">
	<?php $this->load->view('user/sub/header'); ?>
	<body>
		<?php $this->load->view('user/sub/menu'); ?>

		<!--tabel-->
		<div class="container" style="margin-top: 80px;">
			<div class="table-responsive">
				<table id="tabel-data" class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<td>No</td>
							<td>Kode Tempat</td>
							<td>Nama Tempat</td>
					        <td>Alamat</td>
					        <td>Nama Pengurus</td>
					        <td>Kontak</td>

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
				          	<td><?php echo $key->kd_tempat ?></td> 
				         	<td><?php echo $key->nama_tempat ?></td>
				         	<td><?php echo $key->alamat ?></td> 
				         	<td><?php echo $key->nama_pengurus ?></td> 
				           	<td><?php echo $key->contact_p ?></td>            
				          	      
				        </tr>
				        <?php } ?>
					</tbody>
				</table>
			</div>
		</div><br>

  		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</div>
</body>
</html>