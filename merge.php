<?php

include 'dbconfig.php';
include 'getSerial.php';
$old_gigabit = $_POST["old_gigabit"];
$new_gigabit= $_POST["new_gigabit"];
$SVLAN = $_POST["SVLAN"];
$transaction_serial = $collection[0];

//get backup
$sql_backup = "
Select ID_Field,ADSL_USER_NAME,DSLAM from $testing_table where SUBSTR(SUBSTR(NAS_PORT_ID,1,instr(NAS_PORT_ID,'-')),
 instr(NAS_PORT_ID,':')) in (':$SVLAN-')
and SUBSTR(NAS_PORT_ID,1,instr(NAS_PORT_ID,'.' ))='GigabitEthernet $old_gigabit.';";
$store_id = $conn ->query($sql_backup);
while($id_field = $store_id->fetch_array(MYSQLI_NUM)){

  $sql_insertion ="insert into redgate.table_id_log (row_id,landline,action_serial,old_interface,new_interface,svlan,DSLAM)values
('".$id_field[0]."','".$id_field[1]."','".$transaction_serial."','".$old_gigabit."','".$new_gigabit."','".$SVLAN."','".$id_field[2]."');";
  $result_sql = $conn->query($sql_insertion);


}
//get the current MSANS and update.


$sql="UPDATE $testing_table SET `nas_port_id` = REPLACE(`nas_port_id`,'GigabitEthernet $old_gigabit.','GigabitEthernet $new_gigabit.') where SUBSTR(SUBSTR(`nas_port_id`,1,instr(`nas_port_id`,'-')), instr(`nas_port_id`,':')) IN (':$SVLAN-') AND SUBSTR(`nas_port_id`,1,instr(`nas_port_id`,'.' ))='GigabitEthernet $old_gigabit.'";
$old_interface = $conn->query($sql);
echo "<script>$('#notification').hide()</script>";

$bar_action="$('#progbar').slideUp();$('#notification').slideDown()";
$bar_id="progbar";
$bar_subheader="";
$bar_header = "Processing";
$bar_30 ="Migrating";
$bar_50 ="Migrating";
$bar_80 ="Finalizing";
$bar_100 ="Finished";
include 'getbar.php';

$id= "notification";
$text = "Migration Succeeded";
$textsm="Transaction ID:".$transaction_serial;
$icon = "check-square";
include 'animated.php';
echo "<a href='index.php'>Back</a>";




 ?>
