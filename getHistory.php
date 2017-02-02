<?php
  include 'dbconfig.php';
  echo"<script type='text/javascript'>
     function get_rollhistory(){
      $.ajax({
                type: 'POST',
                url: 'get_rollhistory.php',
                 success: function(data) {
                   $('#ul_div_body').empty();
             $('#ul_div_body').append(data);
            // alert(data);

             }


    });
  }

  </script>";


  echo "<ul class='nav nav-pills'><li role='presentation' ><a id='show_user_access' onclick='get_rollhistory();' type='submit' href='#'><i class='fa fa-file-text-o' aria-hidden='true'></i> Rollback History</a></li></div></br><hr>";
     echo "<div id='welcomePanel' class='bs-callout bs-callout-danger' > <h4>Transactions History</h4> <p>Now it's easy to browse the recent activity.</p> </div>
<hr>";
  echo"<div class='container'>";
  echo "<table id='table_history' class='display' cellspacing='0' width='100%'>"; // start a table tag in the HTML
  echo " <thead>
              <tr>
              <th>Row ID</th>
              <th>Landline</th>
              <th>Action Date</th>
              <th>Transaction Serial</th>
              <th>Old Interface</th>
              <th>New Interface</th>
              <th>SVLAN</th>
              <th>DSLAM</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
              <th>Row ID</th>
              <th>Landline</th>
              <th>Action Date</th>
              <th>Transaction Serial</th>
              <th>Old Interface</th>
              <th>New Interface</th>
              <th>SVLAN</th>
              <th>DSLAM</th>
              </tr>
          </tfoot><tbody>";
          $sql_history= 'select * from redgate.table_id_log order by action_date desc limit 1000;';
        $sql_history_result = $conn->query($sql_history);
while ($row = $sql_history_result ->fetch_array(MYSQLI_NUM))
{

// print_r($row);
  echo "<tr><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td></tr>";  //$row['index'] the index here is a field name
  }

  echo "</tbody></table>"; //Close the table in HTML
  echo "</div>";
?>
