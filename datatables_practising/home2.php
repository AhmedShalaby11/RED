
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
          <a class="navbar-brand" href="#">Integration Portal</a>
        </div>
        <ul class="nav navbar-nav" id="li1s">
        <li><a href="#"></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Administration</a></li>
<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
        </ul>
      </div>
    </nav>
    <img src="rohumbus.png" id="vflogo" alt="" style="z-index:-1;float:left;margin-left:-60%;margin-top:-1.5%;margin-bottom:-40%;">
<div class="container">
<h3>Welcome to the Integration Management's Portal</h3>
<div id="welcomePanel" class="bs-callout bs-callout-danger" > <h4>DSLAMS Migration became smart,safe and accurate!</h4> <p>For a smart workflow,the Integration Management's Portal provides a fast and accurate interfaces migration for single and bulk operations.</p> </div>
</div>

<div class="container">
  <ul class="nav nav-tabs">
  <li role="presentation" id="li_data" name="data"><a id="getDT" href="#" onClick="getDataTable()" ><span class="glyphicon glyphicon-floppy-disk"></span> Current MSANs</a></li>
  <li role="presentation" id="li_action" name="action"><a href="#" onClick="action();" ><span class="glyphicon glyphicon-level-up"></span> Update Bulk MSANs</a></li>
  <li role="presentation" id="li_messages" name="messages"><a href="#" onClick="action2();" ><span class="glyphicon glyphicon-phone-alt"></span> Update Landline</a></li>
</ul>
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
    $("#vflogo").hide();
    $("#vflogo").slideDown(500);
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

if ($('#example').length == 1){
$('#ul_div_body').empty();
}else {
  $.ajax({
      url:'api.php',
      success: function(Response){
        $(this).addClass('Active');
          $('#ul_div_body').append("<h4>Here's the uploaded MSANs</h4>");
          $('#ul_div_body').append(Response);
            $('#example').DataTable();
}
})
}

}
function action(){

    $('#ul_div_body').empty();
}
function action2(){

  $('#ul_div_body').empty();
}
</script>



  </body>
</html>
