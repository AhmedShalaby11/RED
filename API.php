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



 $sql = "select Element_Name from redgate.Table_Elements_Design where id =1; ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_array(MYSQLI_NUM);
  printf ("%s (%s)\n", $row[0], $row[1]);

}


?>
