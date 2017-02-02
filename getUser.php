<?php
$username = gethostname();
$database ='redgate';
$table = 'table_revert_log';
include 'dbconfig.php';
$SQL = "insert into $database.$table (user_name,transaction_id) values ('".$username."','".$TID."')";
$conn ->query($SQL);







 ?>
