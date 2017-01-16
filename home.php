<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datatables Practising</title>
  </head>
  <body>


<table><form name="import" method="post" enctype="multipart/form-data"></td>
    	<td style="border:none;"><input type="file" name="file" /><br /></td>
        <td style="border:none;">&nbsp;&nbsp;<button type="submit" class="btn btn-danger" name="upload" >Upload</button></td>
		  
<?php

if(isset($_POST['upload']))
	
{
include 'dbconfig.php';
		$file = $_FILES['file']['tmp_name'];
    


		move_uploaded_file($file,"/Applications/XAMPP/xamppfiles/htdocs/redgate/uploads/".$_FILES['file']['name']."");
		
    $file=$_FILES['file']['name'];
		
		$approot = $_SERVER['DOCUMENT_ROOT']."/".basename(__DIR__); 

	$sql = mysql_query("LOAD DATA LOCAL INFILE '".$approot."/tmp/".$file."' INTO data_new uploads FIELDS TERMINATED BY ',' (msan,interface,svlan)")or die(mysql_error());
	

    // echo $approot;


if ($sql)
{
echo "done";
}
else
{
echo "error";
}
}
?>

  </body>
</html>
