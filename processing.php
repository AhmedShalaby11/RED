<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>
<body>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Integration Portal</a>
        </div>
        <ul class="nav navbar-nav" id="li1s">
        <li><a href="#"></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Administration</a></li>
<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
        </ul>
      </div>
    </nav>
    <img src="uploads/images/rohumbus.png" id="vflogo" alt="" style="z-index:-1;float:left;margin-left:-60%;margin-top:-1.5%;margin-bottom:-40%;">
<div class="container">
<h3>Welcome to the Integration Management's Portal</h3>
<div id="welcomePanel" class="bs-callout bs-callout-danger" > <h4>DSLAMS Migration became smart,safe and accurate!</h4> <p>For a smart workflow,the Integration's Portal provides a fast and accurate interfaces migration for single and bulk operations.</p> </div>
</div>
<div class="container" id="div_bar">
  <h2>Taking care of Data... <span id='loadSpan' class="glyphicon glyphicon-hourglass"></span></h2>
  <h4>Please be patient</h4> 
  <div class="progress" >
<div class="progress-bar progress-bar-striped progress-bar-danger  active" role="progressbar" id="prbar" aria-valuemin="0" aria-valuemax="100" >Starting..
    </div>
  </div>
</div>

<script>
$(document).ready(function (){

$('#loadSpan').fadeOut(1000);
$('#loadSpan').fadeIn(1000);
$('#loadSpan').fadeOut(1000);

$('#loadSpan').fadeOut(1000);
$('#loadSpan').fadeIn(1000);
$('#loadSpan').fadeOut(1000);

$('#loadSpan').fadeOut(1000);
$('#loadSpan').fadeIn(1000);
$('#loadSpan').fadeOut(1000);

$('#loadSpan').fadeOut(1000);
$('#loadSpan').fadeIn(1000);
$('#loadSpan').fadeOut(1000);

$('#loadSpan').fadeOut(1000);
$('#loadSpan').fadeIn(1000);
$('#loadSpan').fadeOut(1000);

});
</script>



<script>
$(document).ready(function (){
function explode(){
$("#prbar").css("width","30%");
$("#prbar").text("Processing your data..");


function explode2(){
$("#prbar").css("width","50%");
$("#prbar").removeClass("progress-bar-danger");
$("#prbar").addClass("progress-bar-warning");
$("#prbar").text("Connected to Database..");


function explode3(){
$("#prbar").css("width","80%");
$("#prbar").removeClass("progress-bar-warning");
$("#prbar").addClass("progress-bar-primary");
$("#prbar").text("Inserting Data..");


function explode4(){
$("#prbar").css("width","100%");
$("#prbar").text("Success..");
$("#prbar").removeClass("progress-bar-primary");
$("#prbar").addClass("progress-bar-success");
$("#div_bar").slideUp(2000);
  $.ajax({
   url: 'getCount.php',
   success: function (response) {//response is value returned from php (for your example it's "bye bye"
$('body').append(response);

   }
});

}
setTimeout(explode4, 5000);

}
setTimeout(explode3, 3500);

}
setTimeout(explode2, 2500);
}
setTimeout(explode, 500);


});
</script>


</body>
</html>