<!DOCTYPE html>
<html>
<title>Web Hanifluhur</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<?php include('Header.php'); ?>


<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:340px;margin-right:40px">

   <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-red"><b>Program Kerja</b></h1>
    <p></p>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <div class="w3-row-padding w3-grayscale">
  <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="<?php echo base_url('w3images/gambar6.jpg'); ?>" alt="" style="width:100%">
        <div class="w3-container">
          <h3>Pendidikan</h3>
          <p class="w3-opacity"></p>
          <p>Masa depan Indonesia yang lebih baik ada di tangan anak-anak. Dompet Dhuafa membantu mewujudkannya dengan memberikan program beasiswa bagi anak-anak Indonesia yang tidak mampu.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="<?php echo base_url ('w3images/gambar8.jpg')?>" alt="" style="width:100%">
        <div class="w3-container">
          <h3>Kesehatan</h3>
          <p class="w3-opacity"></p>
          <p>Dompet Dhuafa di dalam program kesehatan, mendirikan berbagai lembaga kesehatan yang bertujuan untuk melayani seluruh mustahik dengan sistem yang mudah dan terintegrasi dengan sangat baik.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="<?php echo base_url ('w3images/gambar9.jpg')?>" alt="" style="width:100%">
        <div class="w3-container">
          <h3>Ekonomi</h3>
          <p class="w3-opacity"></p>
          <p>Untuk memutus lingkaran kemiskinan di Indonesia, Dompet Dhuafa merangkul masyarakat di seluruh daerah dengan berbagai program pemberdayaan, agar terciptanya entrepreneur dan lapangan kerja baru.</p>
        </div>
      </div>
    </div>
  </div>

  <script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>