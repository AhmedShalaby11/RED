<?php
echo "<span>Commit ID</span>";
echo "<input type='text' name='commit_id' id='commit_id' value ='123456' >";
echo "<form method='post' action='commit.php'>";
echo "<button name='commit_button' type='submit' class='btn btn-success' >Commit</button>";
echo "</form>";

function commitChanges ()
{
//the production query;
}
if (isset($_POST["commit_button"]))
{
  commitChanges();
}


 ?>
