
<html>

<head>
<meta charset="utf-8">
<?php  include 'lib1.php';include 'access.php';
?>
  </head>


  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Integration Portal</a>
        </div>
        <ul class="nav navbar-nav" id="li1s">
        <li><a href="#"></a></li>
        <li id="admin_panel"><a href="superusr.php"><span class="glyphicon glyphicon-user"></span> Administration</a></li>
<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
        </ul>
      </div>
    </nav>
    <img src="uploads/images/rohumbus.png" id="vflogo" alt="" ></img>
    <div class="header_container">
<div class="container">
<h2 style="text-align:center;">Integration Management's Portal</h2>
<h4>Welcome, <?php echo $local_username?></h4>
<div id="welcomePanel" class="bs-callout bs-callout-danger" > <h4>DSLAMS Migration became smart,safe and accurate!</h4> <p>For a smart workflow,the Integration's Portal provides a fast and accurate interfaces migration for single and bulk operations.</p> </div>
</div>
<?php
include 'dbconfig.php';
  $sql = "Select Count(*) as count from redgate.table1;";
  $result = $conn->query($sql);
  $row=mysqli_fetch_assoc($result);



 ?>
<div class="container">
  <ul class="nav nav-tabs">
    <!-- 1.a -->
  <li role="presentation" id="li_data" name="data"><a id="getDT" href="#" onClick="append_userMSANtable();" ><span class="glyphicon glyphicon-floppy-disk"></span> Current MSANs <span id='msan_count'  class="badge"></span></a> </li>
  <!-- <li role="presentation" id="li_action" name="action"><a href="#" onClick="insertUpdatePanel();" ><span class="glyphicon glyphicon-level-up"></span> Update Bulk MSANs</a></li> -->
  <!-- <li role="presentation" id="li_messages" name="messages"><a href="#" onClick="action2();" ><span class="glyphicon glyphicon- phone-alt"></span> Update a Landline</a></li> -->
</ul>


<div class="" id="ul_div_body_panel">

</div>
<div class="" id="ul_div_body">

</div>

</div>
<script type="text/javascript">
  $(document).ready(function() {
    $("#welcomePanel").hide();
    $("#welcomePanel").slideDown(1000);
  });

</script>




<script type="text/javascript">
$(document).ready(function() {
  $('#example tr').click(function(){
    $(this).css("background-color","lightblue");
  })
});

</script>

<script type="text/javascript">
function append_userMSANtable(){
  $('#ul_div_body_panel').empty();
$('#ul_div_body').empty();
if ($('#input_getCurrentMSANs').length !== 1){
$("#ul_div_body").append("<table class='container table ' style='width:500px;' id='input_getCurrentMSANs'><tr><td><span>Current GigabitEthernet</span></td><td><input type='text'  id='old_gigabit' placeholder ='3/4/5' name='old_gigabit' required></td></tr><tr><td><span>SVLAN</span></td><td><input type='text' id='SVLAN' placeholder='3560' name='SVLAN' required></td></tr><tr><td>&nbsp</td><td><button type='button' id='get_msanData' onClick='getDataTable();' name='get_msanData' class='btn btn-danger btn-sm'>Submit</button></td></tr></table>");

}

}
  function getDataTable(){
    if($("#old_gigabit").val() =="" || $("#SVLAN").val() =="")
    {$('#error').remove();
      $('#ul_div_body').append("<h3 id='error'>Please check inputs</h3>");
      return false;
    }
if ($('#table_MSAN').length == 1){
$('#ul_div_body').empty();
}else {

var old_gigabit = $("#old_gigabit").val();
var SVLAN = $("#SVLAN").val();
  $.ajax({
      url:'getCurrentMSAN.php',
      type: "POST",
              data: ({old_gigabit: old_gigabit,SVLAN:SVLAN}),
      success: function(Response){
        $(this).addClass('Active');

    $("#ul_div_body").append("<img  style='float:right;width:90px;margin-right:10%;margin-top:1%;' src='uploads/images/db-10d41bd2.png' id='databaseLogo'/><div class='bs-callout-red bs-callout-danger'> <h5><h4 style='color:red;'>MSANs Database</h4> The following table shows the current customers on Interface <strong><span id='span_interface'></span></strong> with SVLAN <strong><span id='span_SVLAN'></span><strong>.</h5></br></br> Migrate to <input type='text' id='new_gigabit' name=''/> <button type='button' onClick='merge();' id='button_staging_merge' class='btn btn-sm btn-danger' name='button'>Migrate</button> </div>");
$("#span_interface").text(old_gigabit);
$("#span_SVLAN").text(SVLAN);

          $('#ul_div_body').append(Response);
$('#table_MSAN').DataTable();
$("#input_getCurrentMSANs").remove();

}
})
}

}
function insertUpdatePanel(){
// fileToUpload

$("#ul_div_body_panel").empty();
    $('#ul_div_body').empty();
    $('#ul_div_body').append("<div id='uploadContainer' class='container'></div>");
    $('#ul_div_body_panel').append("<ul style='margin-top:20px;' class='nav nav-tabs'><li role='presentation' id='uploadContainer_upload' ><a onClick='append_uploadDiv();' href='#'>Upload data</a><span class=''></span></li><li  id='uploadcontainer_comparison' role='presentation'><a href='#'  onClick='append_comparisonDiv();'>Comparison</a></li></ul>");

}
function action2(){

  $('#ul_div_body').empty();
}
</script>

<script>
function postRequest(){

if ($("#fileToUpload").val() !== null)
{

}


}


</script>

<script>
function append_uploadDiv()
{
   $('ul li').removeClass('Active');

$("#ul_div_body").empty();
    $("#ul_div_body").append("<img  style='float:right;width:90px;margin-right:10%;margin-top:3%;' src='uploads/images/documentslogo.png' id='databaseLogo'/><div class='bs-callout-red bs-callout-danger'> <h5><h4 style='color:red'>Bulk Update Wizard</h4> </br> 1.Select your file with <kbd>CSV</kbd> format. </br> 2.Click <kbd>Upload file</kbd> to insert the data. </br> 3.File is seperated -cells- with <kbd>,</kbd> .</h5></div>");
  $("#ul_div_body").append("<form action='getData.php' method='post' enctype='multipart/form-data'><table><tr><td>Select File </td><td><input type='file' name='fileToUpload' id='fileToUpload'></td><td>&nbsp;</td><td><input type='submit' value='Upload File' class='btn btn-sm btn-danger' name='submit'></td></tr></table></form>");
  $('#uploadContainer_upload').addClass('Active');
$("#ul_div_body").hide();
    $("#ul_div_body").slideDown(700);

}


function merge(){


var old_gigabit1 = $("#span_interface").text();
var new_gigabit1 = $("#new_gigabit").val();
var SVLAN1 = $("#span_SVLAN").text();
// alert("old:" + old_gigabit +"/n new: " +new_gigabit +"/n SVLAN:"+ SVLAN);
    $.ajax({
              type: 'POST',
              url: 'merge.php',
              data: ({old_gigabit:old_gigabit1,new_gigabit:new_gigabit1,SVLAN:SVLAN1}),
               success: function(data) {
                 $('#ul_div_body').empty();
           $('#ul_div_body').append(data);
 //response here


        }

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
  $("#ul_div_body").empty();
  $.ajax({
url:'comparison.php',
      success: function(Response){

        $("#uploadcontainer_comparison").addClass('Active');
           //this is to append the merge accept div for the tabled data..
           $("#ul_div_body").append("<div id='div_merge_confirmation' class='container'></div>")
           $("#div_merge_confirmation").append("<div id='div_merge_confirmation_ctrls' style='width:60%;margin-left:0%;' class='bs-callout bs-callout-red' > <h4 style='color:red;'>Data Staging</h4> <h5>Use <kbd>Merge</kbd> to replace the <code>Old Interface</code> with <code>New Interface</code>. </h5></div>");
          $('#ul_div_body').append(Response);

      $('#example').DataTable();

      }

  });


}

</script>



</script>

  </body>
</html>
