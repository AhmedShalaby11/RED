<?php



include '/Applications/XAMPP/xamppfiles/htdocs/RED/dbconfig.php';

$get_event_sql = "select start,end,title from redgate.calendar ;";
$get_events = $conn ->query($get_event_sql);
echo "[";
while ($event = $get_events ->fetch_array(MYSQLI_NUM)) {
echo "{";
echo '"'."title".'"'.":". '"'.$event[2].'",';
echo '"'."start".'"'.":". '"'.$event[0].'",';
echo '"'."end".'"' .":". '"'.$event[1].'"';
echo "}";

}
echo "]";

 ?>
