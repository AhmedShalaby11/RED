<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <link rel='stylesheet' href='style.css'>

  </head>
  <body>
    <?php
    include 'dbconfig.php';
      $sql = "Select Count(*) as count from redgate.table1;";
      $result = $conn->query($sql);
      $row=mysqli_fetch_assoc($result);

      echo "<div id='result'>";
      echo "<div id='infoPanel' style='width:60%;margin-left:10%; ' class='bs-callout bs-callout-red' > <img  style='float:right;width:90px;margin-right:10%;' src='uploads/images/documentslogo.png' id='databaseLogo'/><h4>Your Transaction has been processed with id#XXX-XXX-XXX </h4> </br> <h5>The below table contains the number of the inserted cabinets..</h5> </div>";
      echo "<table id='tblData' style='width:30%;margin-left:10%;text-align:center;' class='container table table-bordered table-hover' >

      <tr><td>Cabinets Count</td><td>Details</td></tr>
      <tr><td>".$row["count"]."</td><td>xxxxx</td></tr>
      </table>";
      echo "<tr><button style='width:200px;margin-left:35%;text-align:center;' class='btn btn-danger' ><a style='color:white;' id='bkbtn' href='index.php'>Back</a></button></tr>";
      echo "</div>";
      echo "<script>$(document).ready(function(){
          $('#result').hide();
          $('#result').slideDown(1000);

       });
          </script>";


     ?>



  </body>
</html>
