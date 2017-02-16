<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        </head>
        <body>

              <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Integration Portal</a>
        </div>
        <ul class="nav navbar-nav" id="li1s">
        <li><a href="#"></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Administration</a></li>
<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
        </ul>
      </div>
    </nav>
    <img src="uploads/images/rohumbus.png" id="vflogo" alt="" style="z-index:-1;float:left;margin-left:-60%;margin-top:-1.5%;margin-bottom:-40%;">
<div class="container">
<h3>Welcome to the Integration Management's Portal</h3>
<div id="welcomePanel" class="bs-callout bs-callout-danger" > <h4>DSLAMS Migration became smart,safe and accurate!</h4> <p>For a smart workflow,the Integration's Portal provides a fast and accurate interfaces migration for single and bulk operations.</p> </div>
</div>
<div class="container" id="div_bar">
  <h2>Your Data is being processing...</h2>
  <h4>Please be patient</h4>
  <div class="progress" >
<div class="progress-bar progress-bar-striped progress-bar-danger  active" role="progressbar" id="prbar" aria-valuemin="0" aria-valuemax="100" >Starting..
    </div>
  </div>
</div>

<script>
$(document).ready(function (){

function explode(){
  $("#prbar").css("width","100%");
$("#prbar").text("No Data Found...");

function explode2(){
$("#div_bar").slideUp(1500);
}
setTimeout(explode2, 2000);
}
setTimeout(explode, 1000);


});
</script>

<?php



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$file = fopen("$target_file", 'r');
$linecount = 0;
while(!feof($file)){
   $line = fgets($file);
  $linecount++;

}

// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "csv") {
    echo "<h4 style='margin-left:35%;'>Sorry, only <kbd>CSV</kbd> files are allowed.</h4>";

    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    // echo  "<h5 style='margin-left:35%;'>Sorry,your file wasn't uploaded</h5>";
        echo "<tr><button style='width:200px;margin-left:35%;text-align:center;' class='btn btn-danger' ><a style='color:white;' href='index.php'>Back</a></button></tr>";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "<script>location.replace('processing.php')</script>";
    } else {
      echo "<h4 style='margin-left:35%;'>Sorry,Error Occured please contact the Administrator</h4>";
    }
}
}
//upload button here;

// 1.READ FILES ROW AND CREATE AN ARRAY
include 'dbconfig.php';
$file = fopen("$target_file", 'r');
while (($row = fgetcsv($file,0,",")) !== FALSE) {
  //$line is an array of the csv elementsecho "<script>location.replace('processing.php')</script>";
  //2.LOOP THROUGH ALL FILE ROWS AND INSERT INTO DB $row[i];
$sql="insert into redgate.table1 (msan) values ('".$row[0]."')";
// echo $row[0]. "</br>";
$con = $conn->query($sql);

}

fclose($file);

// 1.DONE--------------


?>
</body>
</html>
