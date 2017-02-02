<?php


include 'access.php';
include 'lib1.php';
echo "<html>

<head>
<meta charset='utf-8'>
<script src='http://canvasjs.com/assets/script/canvasjs.min.js'></script>


  </head>


  <body>


    <nav class='navbar navbar-default'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <a class='navbar-brand' href='index.php'>Integration Portal</a>
        </div>
        <ul class='nav navbar-nav' id='li1s'>
        <li><a href='#'></a></li>
        <li><a href='superusr.php'><span class='glyphicon glyphicon-user'></span> Administration</a></li>
<li><a href='#'><span class='glyphicon glyphicon-question-sign'></span> Help</a></li>
        </ul>
      </div>
    </nav>
    <img src='uploads/images/rohumbus.png' id='vflogo' alt='' ></img>
    <div class='header_container'>
<div class='container'>
<h2 style='text-align:center;'>Integration Management's Portal</h2>
<h4>Welcome, ".$local_username."</h4><div id='welcomePanel' class='bs-callout bs-callout-danger' > <p>Premissions may vary according to your group.</p> </div>
</div>";

echo" <ul class='nav nav-tabs container'>
  <li role='presentation' ><a id='show_user_access' onclick='get_access();' type='submit' href='#'><i class='fa fa-users' aria-hidden='true'></i> Users and Privilages</a></li>
  <li role='presentation'><a id='show_history' name='show_history' onclick='append_History();' type='submit' href='#'><i class='fa fa-history'></i> History</a></li>
  <li role='presentation'><a id='show_management' name='show_management'   href='#'><i class='fa fa-user-circle fa-w3x'></i> Management</a></li>
  <li role='presentation'><a href='#' type='submit' onclick='append_Reporting();' name='show_report' id='show_report'><i class='fa fa-area-chart fa-w3x'></i> Trends</a></li>
</ul><div id='ul_div_body' class='container'>



</div>";
 ?>
<script type="text/javascript">
   function get_access(){
    $.ajax({
              type: 'POST',
              url: 'get_AccessForm.php',
               success: function(data) {
                 $('#ul_div_body').empty();
           $('#ul_div_body').append(data);
          // alert(data);

           }


  });
}

</script>



<!-- revert action  -->
<script type='text/javascript'>
function revert(){
    var TID = $("#input_transactionid").val();

      $.ajax({

                type: 'POST',
                url: 'Revert.php',
                data:({TID: TID}),
                 success: function(data) {
                   $('#ul_div_body').empty();
                   $("#ul_div_body").hide();
                   $('#ul_div_body').slideDown();
             $('#ul_div_body').append(data);

             }
           });
};



</script>

<!-- append the history view -->
 <script type="text/javascript">
  function append_History() {
    $(document).ready(function(){
    $('#show_history').click(function(){
      $("#ul_div_body").hide();
      $("#ul_div_body").slideDown();
    $.ajax({
              type: 'POST',
              url: 'getHistory.php',
              data:({SVLAN:"",old_gigabit:""}),
               success: function(data) {
                 $('#ul_div_body').empty();
           $('#ul_div_body').append(data);
           $("#table_history").dataTable();


           }
         });
  });
});
  }


 </script>

 <!-- appends the reports view -->
<script type="text/javascript">
function append_Reporting() {
  $("#ul_div_body").hide();
  $("#ul_div_body").slideDown();
    $('#ul_div_body').load("reports.php");
  };

</script>



<!-- appends the revert view -->
<script type="text/javascript">
$(document).ready(function() {
  $("#show_management").click(function(){

    $('#ul_div_body').empty();
    $("#ul_div_body").hide();
    $("#ul_div_body").slideDown();
    $('#ul_div_body').append("<div class='container'><div id='welcomePanel' class='bs-callout bs-callout-danger' > <h4>Rollback</h4> <p>Use your Transaction ID to revert a change.</p> </div><table class='container table-hover' style='width:70%;padding:40%;'><tr><td><span>Transaction ID</span></td><td><input  name='input_transactionid' id='input_transactionid' ></input></td></tr><tr><td>&nbsp;</td><td><input type='button' id='button_revert' name='button_revert' class='btn btn-danger btn-sm' onclick='revert()' value='Revert'/></td></tr><tr><td>&nbsp;</td><td><span class='label label-default'>A delayed response is expected (avg. 2secs)</span></td></tr></table></div>");

  });
});

</script>

</script>


</script>
