<?php
// $text= "Migrating Interfaces";
// $textsm = "Please be patient..";
// $icon = "spin fa-spin ";
// include 'animated.php';
global $nm1 ;
//get the current MSANS and update.
include 'dbconfig.php';
$column = "interface";
$sql = "select  interface as 'interface' from redgate.table1 where interface like 'GigabitEthernet%'  ";
$old_interface = $conn->query($sql);
$ers= mysqli_query($conn,$sql);
$nm = mysqli_num_rows($ers);

if ($nm == 0)
{
$id= "";
$text = "All Interfaces are updated.";
$textsm="";
$icon = "check";
include 'animated.php';

 }
else {



global $sql1;
//update the current with the new format..
while ($row = $old_interface->fetch_array(MYSQLI_NUM))
{
$new_interface = explode(" ", $row[0]);
$sql1 = "update $database.table1 set  $column ='".$new_interface[1]."' where interface = '".$row[0]."'; ";
global $ers1;
$ers1 =  mysqli_query($conn,$sql1);




}

$id= "";
$text = "Migration succeeded.";
$textsm="";
$icon = "check-square";
include 'animated.php';
}

 ?>
