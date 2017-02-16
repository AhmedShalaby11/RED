<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php

include 'dbconfig.php';
$sql ='select chart_title,chart_type,request_date from redgate.table_trend_config';
$result = $conn->query($sql);
while ( $row=$result->fetch_array(MYSQLI_NUM))
{
  echo "<tr><td>'".$row[0]."',</td><td>'".$row[1]."'</td><td>'".$row[2]."'</td></tr>";
}
     ?>
    </tbody>
  </table>
  </body>
</html>
