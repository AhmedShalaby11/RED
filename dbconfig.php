<?php





$servername = "localhost:3306";
$username = "root";
$password = "ahmedtato1";
$database = "redgate";
$testing_table ="redgate.radius";
$testing_table2 = "table_id_log";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}








 ?>
