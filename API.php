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

 $sql = "select * from redgate.datat limit 1000 ";
$result = $conn->query($sql);
echo"<div class='container'>";
echo "<table id='example' class='display' cellspacing='0' width='100%'>"; // start a table tag in the HTML
echo " <thead>
            <tr>
            <th>MSAN</th>
            <th>INTERFACE</th>
            <th>SVLAN</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>MSAN</th>
                <th>INTERFACE</th>
                <th>SVLAN</th>

            </tr>
        </tfoot><tbody>";
while($row = $result->fetch_array(MYSQLI_NUM)){   //Creates a loop to loop through results
echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</tbody></table>"; //Close the table in HTML
echo "</div>";

?>
