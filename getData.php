
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  </head>
  <body>
  <?php 



    //2.a
    function data_uploadMSAN(){

      include 'dbconfig.php';
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      // Check if image file is a actual image or fake image




      // Allow certain file formats
      if($imageFileType != "csv") {
          echo "Sorry, CSV files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
      //    echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
              // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your file.";

          }
      }

      $file = fopen($target_file,"r");
header("Location: processing.php");
      while (($row = fgetcsv($file,0,",")) !== FALSE) {

      //$line is an array of the csv elements
      // echo "<script>location.replace('processing.php')</script>";
      //2.LOOP THROUGH ALL FILE ROWS AND INSERT INTO DB;
      $sql = "insert into `redgate`.`table1` (msan,interface,svlan) values ('$row[0]','$row[1]','$row[2]');";
      $result = $conn->query($sql);


    }


    }
        // 1.DONE--------------




    if (isset($_POST["getCurrentMSAN"]))
    {
      data_getCurrentMSAN();
    }
      if(isset($_POST["submit"])) {

data_uploadMSAN();


    //GUI and data count.
    //need:generates a transaction's ID


      }









     ?>

  </body>
</html>
