<nav class="navbar navbar-fixed-top navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('Controller'); ?>">Dompet Dhuafa</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-right">
				 <li><a href="<?php echo site_url('User/investor')?>">Data Investor</a></li>
					 <li><a href="<?php echo site_url('User/tempat')?>">Data Tempat</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<b>Welcome Investor, </b><?php echo $this->session->userdata('nama_investor') ?> <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li onclick="return confirm('Anda yakin ingin keluar ?')">
							<a href="<?php echo base_url("Controller/logout"); ?>">Logout <span class="glyphicon glyphicon-log-out pull-right"></span></a>
						</li>
					</ul>
				</li
			</ul>
		</div>
	</div>
</nav>