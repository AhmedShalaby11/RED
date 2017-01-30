<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <form action="readfile.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>


    <?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {



    // Allow certain file formats
    if($imageFileType != "csv") {
        echo "Sorry, CSV files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $file = fopen("uploads/book1.csv","r");
    include 'dbconfig.php';
    while (($row = fgetcsv($file,0,",")) !== FALSE) {

    //$line is an array of the csv elements
    // echo "<script>location.replace('processing.php')</script>";
    //2.LOOP THROUGH ALL FILE ROWS AND INSERT INTO DB;
    $sql = "insert into `redgate`.`table1` (msan,interface,svlan) values ('$row[0]','$row[1]','$row[2]');";
    $result = $conn->query($sql);
    echo $sql;


    }

    fclose($file);
  }

    ?>






  </body>
</html>
