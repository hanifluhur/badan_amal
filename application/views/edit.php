<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuzul</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body><br>
    <div class="container">
      <h4>Edit biodata</h4>
      <?php foreach($biodata as $u){ ?>
      <form action="<?php echo base_url(). 'Controller/update'; ?>" method="post">
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <td>ID</td>
            <td>
              <input type="text" name="id" value="<?php echo $u->id ?>"></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>
              <select name="jurusan" style="width: 175px;">
                <option value="1">Pilih jurusan</option>
                <?php
                foreach($jurusan as $data){
                  echo "<option name='jurusan' value='".$data->id_jurusan."'>".$data->nama_jurusan."</option>";
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" value="<?php echo $u->nim ?>"></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
          </tr>
          <tr>
            <td>Foto</td>
            <td><input type="text" name="foto" value="<?php echo $u->foto ?>"></td>
          </tr>
          <tr>
            <td>Tempat</td>
            <td><input type="text" name="tempat" value="<?php echo $u->tempat ?>"></td>
          </tr>
          <tr>
            <td>Tanggal lahir</td>
            <td><input type="text" name="tgl_lahir" value="<?php echo $u->tgl_lahir ?>"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
          </tr>
        </table>
      </form> 
      <?php } ?>
    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="Hello World"></script>
  </body>
</html>