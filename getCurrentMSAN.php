<?php

  $SVLAN = $_POST["SVLAN"];
  $old_gigabit =$_POST["old_gigabit"];

include 'dbconfig.php';
$sql = "
Select ADSL_USER_NAME,NAS_PORT_ID,DSLAM from $testing_table where SUBSTR(SUBSTR(NAS_PORT_ID,1,instr(NAS_PORT_ID,'-')),
 instr(NAS_PORT_ID,':')) in (':$SVLAN-')
and SUBSTR(NAS_PORT_ID,1,instr(NAS_PORT_ID,'.' ))='GigabitEthernet $old_gigabit.';";

 // $sql = "select * from redgate.table1 ";
$result = $conn->query($sql);
echo"<div class='container'>";
echo "<table id='table_MSAN' class='display' cellspacing='0' width='100%'>"; // start a table tag in the HTML
echo " <thead>
            <tr>
            <th>Landline</th>
            <th>Interface</th>
              <th>DSLAM</th>
            <th>SVLAN</th>


            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Landline</th>
                <th>Interface</th>
                  <th>DSLAM</th>
                <th>SVLAN</th>


            </tr>
        </tfoot><tbody>";
while($row = $result->fetch_array(MYSQLI_NUM)){   //Creates a loop to loop through results
echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>$SVLAN</td></tr>";  //$row['index'] the index here is a field name
}

echo "</tbody></table>"; //Close the table in HTML
echo "</div>";

//get the count for the badge
$sql2 = "
Select count(DSLAM) from $testing_table where SUBSTR(SUBSTR(NAS_PORT_ID,1,instr(NAS_PORT_ID,'-')),
 instr(NAS_PORT_ID,':')) in (':$SVLAN-')
and SUBSTR(NAS_PORT_ID,1,instr(NAS_PORT_ID,'.' ))='GigabitEthernet $old_gigabit.';";

 // $sql = "select * from redgate.table1 ";
$sql_count_badge = $conn->query($sql2);
while($row = $sql_count_badge->fetch_array(MYSQLI_NUM)){   //Creates a loop to loop through results
echo "<script>$('#msan_count').text('".$row[0]."');</script>";

}










?>
