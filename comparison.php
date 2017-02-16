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

     $sql = "select  msan as 'msan' from $database.$radius_table   ";
    $result = $conn->query($sql);

    //2.Append tabled data.
// echo "<button id='button_staging_merge' onclick='merge();' class='btn btn-danger' >Migrate interfaces</button>";
// echo "<button id='button_Commit' style='margin-left:10px;' onclick='commit();' class='btn btn-success ' >Commit</button> </br> </br>";
    echo "<div class='container'><table id='example' class='display' cellspacing='3' style='text-align:center;' width='100%'>";
    echo " <thead>
                <tr style='text-align:center;'>
                <th  style='text-align:center;>Radius Cabinet</th>



                </tr>
            </thead>
            <tfoot>
                <tr>

                    <th  style='text-align:center;>Radius Cabinet</th>



                </tr>
            </tfoot><tbody>";

    while ($row = $result->fetch_array(MYSQLI_NUM))
    {




        echo ("<tr ><td style ='font-weight:bold;'>".$row[0]."</td></tr>");





    }

    echo "</tbody></table></div>"; //Close the table in HTML

echo "  <script>$('#example').DataTable()</script>";




    ?>

  </body>

</html>
