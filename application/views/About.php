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

<?php include('header.php'); ?>


<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:340px;margin-right:40px">
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-red"><b>Sejarah</b></h1>
    <p></p>
    <hr style="width:50px;border:5px solid red" class="w3-round">
     <p>Dompet Dhuafa adalah lembaga milik masyarakat Indonesia yang berkhidmat mengangkat harkat sosial kemanusiaan kaum dhuafa dengan dana. Dompet Dhuafa akan terus mewujudkan masyarakat berdaya yang bertumpu pada sumber daya lokal melalui sistem yang berkeadilan</p>
  </div>

  <div class="w3-main" style="margin-left:0px;margin-right:40px">
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-red"><b>Visi Misi</b></h1>
    <p></p>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p><h3>Visi</h3>1. Terwujudnya masyarakat dunia yang berdaya melalui pelayanan, pembelaan dan pemberdayaan yang berbasis pada sistem yang berkeadilan<br><br>
 
	<h3>Misi</h3>
	1.Menjadi gerakan masyarakat yang mentransformasikan nilai-nilai kebaikan<br>
	2.Mewujudkan masyarakat berdaya melalui pengembangan ekonomi kerakyatan<br>
	3.Terlibat aktif dalam kegiatan kemanusiaan dunia melalui penguatan jaringan global<br>
	4.Melahirkan Kader Pemimpin Berkarakter dan Berkompetensi Global”<br>
	5.Melakukan advokasi kebijakan untuk mewujudkan sistem yg berkeadilan<br>
	6.Mengembangkan diri sebagai organisasi global melalui inovasi, kualitas pelayanan, transparansi, akuntabilitas, indepedensi dan<br>kemandirian lembaga</p>

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

