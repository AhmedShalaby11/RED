<?php
include 'dbconfig.php';
//1.Get the old data.

 $sql = "select  interface as 'interface' from redgate.new_table  ";
$result = $conn->query($sql);

//2.Append tabled data.

echo "<table id='example' class='display' cellspacing='0' width='100%'>";
echo " <thead>
            <tr>
            <th>Old Interface</th>
            <th>New Interface</th>

            </tr>
        </thead>
        <tfoot>
            <tr>

                <th>Old Interface</th>
                <th>New Interface</th>

            </tr>
        </tfoot><tbody>";

while ($row = $result->fetch_array(MYSQLI_NUM))
{  $pieces = explode(" ", $row[0]);
    echo ("<tr ><td style ='background-color:darkgrey;color:white;font-weight:bold;'>".$row[0]."</td><td style ='font-weight:bold;background-color:green;color:white'>".$pieces[1]."</td></tr>");




}

echo "</tbody></table>"; //Close the table in HTML



if (isset($_POST["mergeData"]))
{
  //get the current msans count
  include 'dbconfig.php';
  $sql_getOldCount ="select count(interface) from redgate.new_table'";
$result_sqlCount = $conn ->query($sql_getOldCount);
echo $result_sqlCount;




}


?>
