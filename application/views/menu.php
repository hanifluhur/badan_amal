		<!-- Modal -->
<div class="modal fade" id="my" role="dialog" style="padding:80px 50px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">        
          <form action="<?php echo base_url('Controller/login') ?>" method="POST" role="form">
          <fieldset>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="user" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="pass" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" name="login" class="btn btn-success btn-md"><span class="glyphicon glyphicon-off"></span> Login</button>
              <button type="submit" class="btn btn-danger btn-default btn-md" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          </fieldset>
          </form>

        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="<?php echo base_url('Controller/halaman_daftar'); ?>">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 

  <!-- Modal -->
  
        </div>
      </div>
    </div>
  </div> 

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

                    <li><a class="is-active" <a href="<?php echo base_url('Controller'); ?>">HOME</a></li>
                     
                    <li class="has-child"><a href="#">PROFIL</a>
                    
                     <ul class="submenu">
                         <li class="submenu-item"><a href="<?php echo base_url('Controller/sejarah'); ?>">Sejarah</a></li>
                         <li class="submenu-item"><a href="<?php echo base_url('Controller/visimisi'); ?>">Visi Misi</a></li>
                         <li class="submenu-item"><a href="<?php echo base_url('Controller/profil'); ?>">Contact</a></li>
                      </ul>

                    <li class="has-child"><a href="#">DATA CHARITY</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="<?php echo base_url('Controller/biodata_donasi'); ?>"> Data Investor</a></li>
                         <li class="submenu-item"><a href="<?php echo base_url('Controller/biodata_donatur'); ?>">Data Tempat</a></li>
                      </ul>
						</li>
						<li><a href="#" data-target="#my" data-toggle="modal"role="button" aria-haspopup="true" aria-expanded="false">LOGIN</a>
					  </li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->

