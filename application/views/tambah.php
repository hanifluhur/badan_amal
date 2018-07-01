<!DOCTYPE html>
<html lang="">
  <head>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/icon/paper-plane.png'); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BadanAmal</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

      
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo base_URL('css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_URL('css/icomoon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_URL('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_URL('css/superfish.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_URL('css/style.css'); ?>">
    <script src="<?php echo base_URL('js/modernizr-2.6.2.min.js'); ?>"></script>
  
  </head>
  <body><br>
    <div class="container">
      <h4>Tambah biodata</h4>
      <?= form_open_multipart('Controller/input'); ?>
      <?= validation_errors(); ?>
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <td>ID</td>
            <td><input type="text" name="id"></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>
              <select name="jurusan" style="width: 175px;">
                <option value="1">Pilih jurusan</option>
                <?php
                foreach($jurusan as $data){
                  echo "<option value='".$data->id_jurusan."'>".$data->nama_jurusan."</option>";
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
          </tr>
          <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" class="form-control" id="foto" value=""></td>
          </tr>
          <tr>
            <td>Tempat</td>
            <td><input type="text" name="tempat"></td>
          </tr>
          <tr>
            <td>Tgl lahir</td>
            <td><input type="text" id="datepicker" name="tgl_lahir"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Tambah"></td>
          </tr>
        </table>
        <?= form_close(); ?>
      </form> 
    </div>

    <script>
      $( function() {
        $( "#datepicker" ).datepicker({dateFormat:'yy-mm-dd'});
      } );
    </script>
    

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="Hello World"></script>
  </body>
</html>