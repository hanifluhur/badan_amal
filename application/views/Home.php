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
    <h1 class="w3-xxxlarge w3-text-red"><b>Profil</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Dompet Dhuafa adalah lembaga milik masyarakat Indonesia yang berkhidmat mengangkat harkat sosial kemanusiaan kaum dhuafa dengan dana. Dompet Dhuafa akan terus mewujudkan masyarakat berdaya yang bertumpu pada sumber daya lokal melalui sistem yang berkeadilan</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="<?php echo base_url('w3images/gambar1.jpg'); ?>" style="width:100%" alt="">
      <br>
      <br>
      <br>
      <br>
      <img src="<?php echo base_url('w3images/gambar10.jpg'); ?>" style="width:100%" alt="">
    </div>

    <div class="w3-half">
      <img src="<?php echo base_url('w3images/gambar11.jpg'); ?>" style="width:100%" alt="">
      <img src="<?php echo base_url('w3images/tes.png'); ?>" style="width:100%" alt="">
  
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
