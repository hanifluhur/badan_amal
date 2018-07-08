<header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> +0812 3456 7890</li>
                             <li> <i class="fa fa-envelope"></i>dompetdhuafa@gmail.com</li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.html"><img src="assets/images/sadaka-logo.png" alt=""></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active" href="<?php echo base_url('User'); ?>">BERANDA</a></li>
                    <li><a href="<?php echo site_url('User/donasi')?>">DONASI</a></li>
                    <li><a href="<?php echo site_url('User/investor')?>">INVESTOR</a></li>
					          <li class="has-child"><a href="#"><b>WELCOME INVESTOR, </b><?php echo $this->session->userdata('nama_investor') ?> <b class="caret"></b></a>
                    
                     <ul class="submenu">
                         <li class="submenu-item"><a href="<?php echo base_url('User/profil'); ?>">Profil</a></li>
                         <li class="submenu-item" onclick="return confirm('Anda yakin ingin keluar ?')" ><a href="<?php echo base_url('Controller/logout'); ?>">LogOut</a></li>
                      </ul>
                </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->

