<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display:none}
</style>
<body class="w3-content w3-border-left w3-border-right">

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-light-grey w3-collapse w3-top" style="z-index:3;width:400px;margin-left:-10%;" id="mySidenav">
  <div class="w3-container w3-padding-8">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-closebtn w3-hover-text-red"></i>
    <h3>Dashboard</h3>
    <h3>Products Management</h3>
    <h6>Control Wizard</h6>
    <hr>

      <p><label><i class="fa fa-cutlery"></i> Product Name</label></p>
      <input class="w3-input w3-border" type="text" placeholder="Enter Name" name="CheckIn" required>          

      <p><button class="w3-btn-block w3-red w3-padding w3-left-align" type="submit"><i class="fa fa-search w3-margin-right"></i> Get Product</button></p>

  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding-16">
  <span class="w3-left">Rental</span>
  <a href="javascript:void(0)" class="w3-right w3-opennav" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white" style="margin-left:260px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>


<!-- End page content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-closebtn w3-xlarge w3-hover-text-grey w3-margin"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join our mailing list to receive updates on available dates and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-btn w3-padding-large w3-green w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>



</body>
</html>

