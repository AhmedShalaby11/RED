<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset='utf-8'>
<?php include 'lib1.php' ?>

  </head>
  <body>
    <?php
    include 'dbconfig.php';
    //1.Get the old data.

     $sql = "select  interface as 'interface' from redgate.table1  ";
    $result = $conn->query($sql);

    //2.Append tabled data.
echo "<button id='button_staging_merge' onclick='merge();' class='btn btn-danger' >Migrate interfaces</button>";
echo "<button id='button_Commit' style='margin-left:10px;' onclick='commit();' class='btn btn-success ' >Commit</button> </br> </br>";
    echo "<table id='example' class='display' cellspacing='3' style='text-align:center;' width='100%'>";
    echo " <thead>
                <tr style='text-align:center;'>
                <th>Old Interface</th>
                <th>New Interface</th>


                </tr>
            </thead>
            <tfoot>
                <tr>

                    <th>Old Interface</th>
                    <th>New Interface</th>


                </tr>
            </tfoot><tbody>";

    while ($row = $result->fetch_array(MYSQLI_NUM))
    {

      $pieces = explode(" ", $row[0]);
      if ($pieces[0] == "GigabitEthernet" )
      {
        echo ("<tr ><td style ='font-weight:bold;'>".$row[0]."</td><td style ='font-weight:bold;'>".$pieces[1]."</td></tr>");
// echo "not null";
}
else
{
  // no records .
  echo ("<tr ><td style ='font-weight:bold;'>".$row[0]."</td><td style ='font-weight:bold;'>Updated</td></tr>");

}




    }

    echo "</tbody></table>"; //Close the table in HTML






    ?>

  </body>

</html>
