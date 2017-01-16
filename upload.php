<?php

include 'dbconfig.php';

                                $file = $_FILES['file']['tmp_name'];
                                move_uploaded_file($file,"tmp/".$_FILES['file']['name']."");
                                $file=$_FILES['file']['name'];                       
                                $approot = $_SERVER['DOCUMENT_ROOT']."/".basename(__DIR__);    

    // echo $approot;
$sql = mysql_query("LOAD DATA LOCAL INFILE '".$approot."/tmp/".$file."' IGNORE INTO TABLE  uploads  
    FIELDS TERMINATED BY ',' IGNORE 1 LINES (msan,interface,svlan) ")or die(mysql_error());
                               

if ($sql)
{
echo "done";
}
else
{
echo "error";
}



?>
