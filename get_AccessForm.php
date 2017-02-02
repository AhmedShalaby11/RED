<?php
include "lib1.php";

echo"<div class='container'><div id='welcomePanel' class='bs-callout bs-callout-danger' > <h4>Change user's role</h4> <p></p> </div><table class='container table-hover' style='width:70%;padding:40%;'>";


echo " <form class='container' action='get_AccessForm.php' method='post'>
<span>Username </span><input id='input_username' name='input_username' />&nbsp;&nbsp;
<input type='radio' name='radio' value='admin'>Admin
<input type='radio' name='radio' value='user'>User </br></br>

<input type='submit' style='margin-left:8%;' class='btn btn-sm btn-danger' name='submit' value='Change Access' />
</form>";

if (isset($_POST['submit'])) {
if(isset($_POST['radio']))
{
  include 'dbconfig.php';
  $database = "redgate";
  $table = "table_user_access";
  $username = $_POST['radio'];
  $role =$_POST['input_username'];
  $sql = "update $database.$table set role ='".$username."' where username = '".$role."'";
  $conn->query($sql);

  echo "User  ".$_POST['input_username']."  is now : ".$_POST['radio'];
}
}
?>
