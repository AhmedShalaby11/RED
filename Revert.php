<?php

include 'dbconfig.php';

echo "<script>$('#transaction_result').hide();</script>";
$TID =  $_POST['TID'];
$sql = "select row_id,old_interface,new_interface,svlan from redgate.table_id_log where action_serial = '".$TID."' ; ";

$old_new_interface= $conn ->query($sql);
$bar_action="$('#progbar').slideUp();$('#notification').slideDown();$('#transaction_result').slideDown();";
$bar_id="progbar";
$bar_subheader="";
$bar_header = "Processing";
$bar_30 ="Reverting";
$bar_50 ="Reverting";
$bar_80 ="Finalizing";
$bar_100 ="Finished";
include 'getbar.php';
while ($row  = $old_new_interface -> fetch_array(MYSQLI_NUM))
{
  include 'dbconfig.php';

  //row 0 =id
  //row 1 = old
  //row 2  = new
  // row 3 = svlan

  $sql2 = "update redgate.radius SET NAS_PORT_ID = REPLACE(NAS_PORT_ID,'GigabitEthernet ".$row[2].".','GigabitEthernet ".$row[1].".')
 where  SUBSTR(SUBSTR(NAS_PORT_ID,1,instr(NAS_PORT_ID,'-')), instr(NAS_PORT_ID,':')) in (':".$row[3]."-')
 and SUBSTR(NAS_PORT_ID,1,instr(NAS_PORT_ID,'.' ))='GigabitEthernet ".$row[2].".' and id_field in('".$row[0]."');";
  $query_result = $conn ->query($sql2);


}



   $id='transaction_result';
   $icon = "";
   $text ="Completed";
   $textsm = "$TID was reverted successfully.";
   include 'animated.php';
   echo "<a href='superusr.php'>Back</a>";
   include 'getuser.php';
 ?>
