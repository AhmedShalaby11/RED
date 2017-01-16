<?php



$servername = "localhost:3306";
$username = "root";
$password = "ahmedtato1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



 $sql = "select * from redgate.DATAT; ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_array(MYSQLI_NUM);
  echo ($row);

?>
