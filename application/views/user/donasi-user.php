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
				<center>
					<button class="btn btn-default btn-label-left" id="print" onClick="popup_print()" >	Print</button>
				</center>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br>


</div>
</body>
</html>

<!-- print preview -->
<script type="text/javascript">
var s5_taf_parent = window.location;
function popup_print(){
	window.open('<?php echo base_url('User/prin_user'); ?>','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes')
}
</script>