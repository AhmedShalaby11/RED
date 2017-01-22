
<html>
    <meta charset="utf-8">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="datatables.css">
    <script type="text/javascript" src="datatables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.13/af-2.1.3/b-1.2.4/b-colvis-1.2.4/cr-1.3.2/r-2.1.0/rr-1.2.0/sc-1.4.2/se-1.2.0/datatables.min.css"/>
<link rel="stylesheet" href="style.css">

  </head>


  <body>



    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="home2.php">Integration Portal</a>
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

<div class="container">
  <ul class="nav nav-tabs">
  <li role="presentation" id="li_data" name="data"><a id="getDT" href="#" onClick="getDataTable()" ><span class="glyphicon glyphicon-floppy-disk"></span> Current MSANs <span class="badge">1000</span></a> </li>
  <li role="presentation" id="li_action" name="action"><a href="#" onClick="insertUpdatePanel();" ><span class="glyphicon glyphicon-level-up"></span> Update Bulk MSANs</a></li>
  <li role="presentation" id="li_messages" name="messages"><a href="#" onClick="action2();" ><span class="glyphicon glyphicon-phone-alt"></span> Update a Landline</a></li>
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
  function getDataTable(){
  $('#ul_div_body_panel').empty();
$('#ul_div_body').empty();
if ($('#example').length == 1){
$('#ul_div_body').empty();
}else {
  $.ajax({
      url:'api.php',
      success: function(Response){
        $(this).addClass('Active');
    $("#ul_div_body").append("<img  style='float:right;width:90px;margin-right:10%;' src='uploads/images/db-10d41bd2.png' id='databaseLogo'/><div class='bs-callout-red bs-callout-danger'> <h5><h4 style='color:red;'>MSANs Database</h4> The following tables shows the uploaded MSANS.</h5></div>");
          $('#ul_div_body').append(Response);
            $('#example').DataTable();

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
else
{ // 1.Check/Test this function();

    $(document).ready(function(){
      $("#btnupload").click(function(){
         $.ajax({
                type: 'POST',
                url: 'processing.php',
                success: function(data) {


                }

            });
      }
    })

   }
}

function merge_data()
{
//start from this function



}
</script>


<script>
function append_uploadDiv()
{
   $('ul li').removeClass('Active');

$("#ul_div_body").empty();
    $("#ul_div_body").append("<img  style='float:right;width:90px;margin-right:10%;margin-top:3%;' src='uploads/images/documentslogo.png' id='databaseLogo'/><div class='bs-callout-red bs-callout-danger'> <h5><h4 style='color:red'>Bulk Update Wizard</h4> </br> 1.Select your file with <kbd>CSV</kbd> format. </br> 2.Click <kbd>Upload file</kbd> to insert the data. </br> 3.File is seperated -cells- with <kbd>,</kbd> .</h5></div>");
    $('#ul_div_body').append("<table style='width:40%;' class='container'><form action='upload.php' method='post' name='form1' onsubmit='postRequest();return false;' enctype='multipart/form-data' ><tr><td><input class='form-control textInput' type='file' name='fileToUpload' id='fileToUpload' ></td><td><input  type='submit' class='btn btn-danger' value=' Upload File'  id='btnUpload' name=' submit' ></td></form>");
  $('#uploadContainer_upload').addClass('Active');
$("#ul_div_body").hide();
    $("#ul_div_body").slideDown(700);

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
      $('#ul_div_body').append(" <button id='button_staging_merge' class='btn btn-danger' onclick='merge_data();'>Merge</button> </br>");
      }

  });


}


</script>
  </body>
</html>
