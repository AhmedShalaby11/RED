

<?php
include 'dbconfig.php';
$database = 'redgate';
$table = 'table_user_access';
$local_username = gethostname();
$sql = "select role from $database.$table where username= '".$local_username."'";
$result = $conn ->query($sql);

while ( $role = $result -> fetch_array(MYSQLI_NUM)) {
$_SESSION["username"] = $role[0];
if ($_SESSION["username"] == "user")
{

  echo "<script type='text/javascript'>
    $(document).ready(function() {

       $('#admin_panel').hide();
    });

  </script>";
}


}





 ?>
