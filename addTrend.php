<?php
include 'lib1.php';
$template = "no";
$header = "Add new trend  <i class='fa fa-line-chart fa-w3x' aria-hidden='true'></i>";
$color= "red";
$message1 = "The charts will be up-to-date along with the data stored in the database.";
$message2= "";
$add_style = "";
include 'sidePanel.php';
echo"<form method='post' action='addTrend.php'><table>
  <tr>
    <td><span>Query</span></td>
    <td><input type='text' name='input_query' value=''></td>
  </tr>
  <tr>
    <td><span>Title</span></td>
    <td><input type='text' name='input_title' value=''></td>
  </tr>
  <tr>
    <td><span>Div ID</span></td>
    <td><input type='text' name='input_div_id' value=''></td>
  </tr>
  <tr>
    <td><span>Chart Type</span></td>
    <td><input type='text' name='input_chart_type' value=''></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input type='submit' class='btn btn-danger btn-sm' name='button_add_query' value='Add'></td>
  </tr>

</table></form>";


if ( isset($_POST['button_add_query']))
{
  include 'dbconfig.php';
  $table = "table_trend_config";
 $query = $_POST['input_query'];
 $title = $_POST['input_title'];
 $div_id = $_POST['input_div_id'];
 $chart_type = $_POST['input_chart_type'];
$username = gethostname();
$sql = "insert into $database.$table (chart_query,chart_title,chart_element_id,chart_type,request_by) values('".$query."','".$title."','".$div_id."','".$chart_type."','".$username."');";
$result_insertion = $conn->query($sql);
echo $sql;
echo "<script>alert('Trend: $title  was added')</script>";


header('Location:superusr.php');






}
 ?>
