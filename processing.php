<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Bootstrap Example</title>
<?php include 'lib1.php'; ?>
</head>
<body>
  <nav class='navbar navbar-default'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <a class='navbar-brand' href='index.php'>Integration Portal</a>
        </div>
        <ul class='nav navbar-nav' id='li1s'>
        <li><a href='#'></a></li>
        <li><a href='#'><span class='glyphicon glyphicon-user'></span> Administration</a></li>
<li><a href='#'><span class='glyphicon glyphicon-question-sign'></span> Help</a></li>
        </ul>
      </div>
    </nav>
    <img src='uploads/images/rohumbus.png' id='vflogo' alt=''>
<div class='container'>
<h3>Welcome to the Integration Management's Portal</h3>
<div id='welcomePanel' class='bs-callout bs-callout-danger' > <h4>DSLAMS Migration became smart,safe and accurate!</h4> <p>For a smart workflow,the Integration's Portal provides a fast and accurate interfaces migration for single and bulk operations.</p> </div>
</div>
<!--bar -->
<div class='container' id='div_bar'>
  <h2>Taking care of Data   ... <i class="fa fa-cog fa-spin fa-1x fa-fw"></i></h2>
  <h4>Please be patient</h4>
  <div class='progress' >
<div class='progress-bar progress-bar-striped progress-bar-danger  active' role='progressbar' id='prbar' aria-valuemin='0' aria-valuemax='100' >Starting..
    </div>
  </div>
</div>

<?php


?>
<!-- change this -->




<script>
$(document).ready(function (){
function explode(){
$('#prbar').css('width','30%');
$('#prbar').text('Processing your data..');


function explode2(){
$('#prbar').css('width','50%');
$('#prbar').removeClass('progress-bar-danger');
$('#prbar').addClass('progress-bar-warning');
$('#prbar').text('Connected to Database..');


function explode3(){
$('#prbar').css('width','80%');
$('#prbar').removeClass('progress-bar-warning');
$('#prbar').addClass('progress-bar-primary');
$('#prbar').text('Inserting Data..');


function explode4(){
$('#prbar').css('width','100%');
$('#prbar').text('Success..');
$('#prbar').removeClass('progress-bar-primary');
$('#prbar').addClass('progress-bar-success');
$('#div_bar').slideUp(2000);
  $.ajax({
   url: 'getStat.php',
   success: function (response) {//response is value returned from php (for your example it's 'bye bye'
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
