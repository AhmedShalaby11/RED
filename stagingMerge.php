
<?php


include 'dbconfig.php';

//get the data; -- from the csv file is better -- 
$sql = "Select interface as 'interface' from redgate.datat where interface is not null;";
$result = $conn->query($sql);


//$pieces = explode(" ", $row[0]);
while ($oldGiga = $result->fetch_array(MYSQLI_NUM))
{


    $newGiga = explode(" ", $oldGiga[0]);
echo $newGiga[1];
//insert into table_staging_data the staged data 
//$sql2 = "update redgate.datat set interface = '".$newGiga[1]."' where interface ='".$oldGiga[0]."'; ";
//echo $sql2;
//$mergeResult = $conn->query($sql2);

}



?>


