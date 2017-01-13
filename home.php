<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RegGate</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>

  <!-- Optional theme -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>

  <!-- Latest compiled and minified JavaScript -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

  <!-- Latest compiled and minified CSS -->

  </head>
  <body>

<?php

$servername = "localhost:3306";
$username = "root";
$password = "ahmedtato1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$sql = "select Element_Name from redgate.Table_Elements_Design where id =1; ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $row = $result->fetch_array(MYSQLI_NUM);

// echo( '<nav class="navbar navbar-default">
//   <div class="container-fluid">
//     <div class="navbar-header">
//       <a class="navbar-brand" href="#">RegGate</a>
//     </div>
//     <ul class="nav navbar-nav" id="li1s">
//      '.$row[0].'
//     </ul>
//   </div>
// </nav>');
}

 ?>


<div class="container-fluid">
<table id="table1" class=" table table-hover table-bordered" style="width:50%;margin-left:20%;">
  <tr>
    <th>Name</th>
    <th>Age</th>
    <th>Class</th>
  </tr>
  <tr>
    <td>Ahmed </td>
    <td>26</td>
    <td>2017</td>

  </tr>
</table>

</div>
<script type="text/javascript">
$(document).ready(function() {
   // Stuff to do as soon as the DOM is ready
     $('table tr th').css({"background-color": "#4245f4 ", "color": "white","text-align":"center"});

});


</script>
<kbd  onclick="copyToClipboard('vv')">CTRL+C</kbd>
<script>
  $(document).ready(function(){
    $('kbd').click(function(){
      $(this).css("background-color","green");
    });
  });
</script>
<input type="text" id="vv" value="hello">
<script>
function copyToClipboard(elementId) {


  var aux = document.getElementById("vv");
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);

}
 </script>

  </body>
</html>
