<?php

echo "<html>

<head>
<meta charset='utf-8'>
<?php  include 'lib1.php';?>
  </head>


  <body>
    <nav class='navbar navbar-default'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <a class='navbar-brand' href='home2.php'>Integration Portal</a>
        </div>
        <ul class='nav navbar-nav' id='li1s'>
        <li><a href='#'></a></li>
        <li><a href='#'><span class='glyphicon glyphicon-user'></span> Administration</a></li>
<li><a href='#'><span class='glyphicon glyphicon-question-sign'></span> Help</a></li>
        </ul>
      </div>
    </nav>
    <img src='uploads/images/rohumbus.png' id='vflogo' alt='' ></img>
    <div class='header_container'>
<div class='container'>
<h3>Welcome to the Integration Management's Portal</h3>
<div id='welcomePanel' class='bs-callout bs-callout-danger' > <h4>DSLAMS Migration became smart,safe and accurate!</h4> <p>For a smart workflow,the Integration's Portal provides a fast and accurate interfaces migration for single and bulk operations.</p> </div>
</div>
<?php
include 'dbconfig.php';
  $sql = 'Select Count(*) as count from redgate.table1;';
  $result = $conn->query($sql);
  $row=mysqli_fetch_assoc($result);



 ?>
<div class='container'>
  <ul class='nav nav-tabs'>
    <!-- 1.a -->
  <li role='presentation' id='li_data' name='data'><a id='getDT' href='#' onClick='getDataTable()' ><span class='glyphicon glyphicon-floppy-disk'></span> Current MSANs <span  class='badge'><?php echo $row['count']?></span></a> </li>
  <li role='presentation' id='li_action' name='action'><a href='#' onClick='insertUpdatePanel();' ><span class='glyphicon glyphicon-level-up'></span> Update Bulk MSANs</a></li>
  <!-- <li role='presentation' id='li_messages' name='messages'><a href='#' onClick='action2();' ><span class='glyphicon glyphicon- phone-alt'></span> Update a Landline</a></li> -->
</ul>


<div class='' id='ul_div_body_panel'>

</div>
<div class='' id='ul_div_body'>

</div>

</div>
<script type='text/javascript'>
  $(document).ready(function() {
    $('#welcomePanel').hide();
    $('#welcomePanel').slideDown(1000);
  });

</script>




<script type='text/javascript'>
$(document).ready(function() {
  $('#example tr').click(function(){
    $(this).css('background-color','lightblue');
  })
});

</script>


<script type='text/javascript'>
  function getDataTable(){
  $('#ul_div_body_panel').empty();
$('#ul_div_body').empty();
if ($('#table_MSAN').length == 1){
$('#ul_div_body').empty();
}else {


  $.ajax({
      url:'getCurrentMSAN.php',
      success: function(Response){
        $(this).addClass('Active');

    $('#ul_div_body').append('<img  style='float:right;width:90px;margin-right:10%;' src='uploads/images/db-10d41bd2.png' id='databaseLogo'/><div class='bs-callout-red bs-callout-danger'> <h5><h4 style='color:red;'>MSANs Database</h4> The following tables shows the uploaded MSANS.</h5></div>');
          $('#ul_div_body').append(Response);
$('#table_MSAN').DataTable();


}
})
}

}
function insertUpdatePanel(){
// fileToUpload

$('#ul_div_body_panel').empty();
    $('#ul_div_body').empty();
    $('#ul_div_body').append('<div id='uploadContainer' class='container'></div>');
    $('#ul_div_body_panel').append('<ul style='margin-top:20px;' class='nav nav-tabs'><li role='presentation' id='uploadContainer_upload' ><a onClick='append_uploadDiv();' href='#'>Upload data</a><span class=''></span></li><li  id='uploadcontainer_comparison' role='presentation'><a href='#'  onClick='append_comparisonDiv();'>Comparison</a></li></ul>');

}
function action2(){

  $('#ul_div_body').empty();
}
</script>

<script>
function postRequest(){

if ($('#fileToUpload').val() !== null)
{

}


}


</script>

<script>
function append_uploadDiv()
{
   $('ul li').removeClass('Active');

$('#ul_div_body').empty();
    $('#ul_div_body').append('<img  style='float:right;width:90px;margin-right:10%;margin-top:3%;' src='uploads/images/documentslogo.png' id='databaseLogo'/><div class='bs-callout-red bs-callout-danger'> <h5><h4 style='color:red'>Bulk Update Wizard</h4> </br> 1.Select your file with <kbd>CSV</kbd> format. </br> 2.Click <kbd>Upload file</kbd> to insert the data. </br> 3.File is seperated -cells- with <kbd>,</kbd> .</h5></div>');
  $('#ul_div_body').append('<form action='getData.php' method='post' enctype='multipart/form-data'><table><tr><td>Select File </td><td><input type='file' name='fileToUpload' id='fileToUpload'></td><td>&nbsp;</td><td><input type='submit' value='Upload File' class='btn btn-sm btn-danger' name='submit'></td></tr></table></form>');
  $('#uploadContainer_upload').addClass('Active');
$('#ul_div_body').hide();
    $('#ul_div_body').slideDown(700);

}


function merge(){
  $('#button_staging_merge').click(function(){
    $.ajax({
              type: 'POST',
              url: 'merge.php',
               success: function(data) {
                 $('#ul_div_body').empty();
           $('#ul_div_body').append(data);

           }
  });
  });
}
function commit(){
  $('#button_Commit').click(function(){
    $.ajax({
              type: 'POST',
              url: 'commit.php',
               success: function(data) {
                 $('#ul_div_body').empty();
           $('#ul_div_body').append(data);

           }
  });
  });
}

function append_comparisonDiv ()
{
  $('ul li').removeClass('Active');
  $('#ul_div_body').empty();
  $.ajax({
url:'comparison.php',
      success: function(Response){

        $('#uploadcontainer_comparison').addClass('Active');
           //this is to append the merge accept div for the tabled data..
           $('#ul_div_body').append('<div id='div_merge_confirmation' class='container'></div>')
           $('#div_merge_confirmation').append('<div id='div_merge_confirmation_ctrls' style='width:60%;margin-left:0%;' class='bs-callout bs-callout-red' > <h4 style='color:red;'>Data Staging</h4> <h5>Use <kbd>Merge</kbd> to replace the <code>Old Interface</code> with <code>New Interface</code>. </h5></div>');
          $('#ul_div_body').append(Response);

      $('#example').DataTable();

      }

  });


}

</script>



<table class='container'>
  <tr>
    <td><span>Current GigabitEthernet</span></td><td><input type='text' name='old_gigabit' value=''></td>
  </tr>
  <tr>
    <td><span>SVLAN</span></td><td><input type='text' name='SVLAN' value=''></td>
  </tr>
  <tr>
    <td>&nbsp</td><td><button type='submit' onclick='getDataTable();' name='get_msanData'>Qurey</button></td>
  </tr>
</table>



";


 ?>
