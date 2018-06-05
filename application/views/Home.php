
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
    <h1 class="w3-xxxlarge w3-text-red"><b>Profil</b></h1>
    <p>Dompet Dhuafa adalah lembaga milik masyarakat Indonesia yang berkhidmat mengangkat harkat sosial kemanusiaan kaum dhuafa dengan dana. Dompet Dhuafa akan terus mewujudkan masyarakat berdaya yang bertumpu pada sumber daya lokal melalui sistem yang berkeadilan</p>
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
        <img src="<?php echo base_url ('w3images/gambar7.jpg')?>" alt="" style="width:100%">
        <div class="w3-container">
          <h3>Ekonomi</h3>
          <p class="w3-opacity"></p>
          <p>Untuk memutus lingkaran kemiskinan di Indonesia, Dompet Dhuafa merangkul masyarakat di seluruh daerah dengan berbagai program pemberdayaan, agar terciptanya entrepreneur dan lapangan kerja baru.</p>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>




  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
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
