<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:#f1f1f1">

    <?php


  $cmd = $_POST["shellCommand1"];
  $res  = shell_exec($cmd);
  include 'lib.php';
  $template = "no";
  $color="red";
  $add_style= "";
  $header = "<span class='fa-stack fa-lg'>
  <i class='fa fa-square fa-stack-2x'></i>
  <i class='fa fa-terminal fa-stack-1x fa-inverse'></i>
</span> EXECUTE SHELL";
  $message1 = "Careful,this is dangerous. <i class='fa fa-linux fa-3x' aria-hidden='true'></i>";
  $message2 ="";
  include 'sidePanel.php';
     ?>
     <form class="container" action="getShell.php" method="post">
       <input name='shellCommand1' ></input>

       <input type="submit" class="btn btn-sm" name="shellCommand" value="Execute">
<div style="margin-left:-14px;" class="container">


       <?php
       if (isset($res))
       {
echo " <textarea style='width:1000px;height:300px;' >$res</textarea>";
}
else {
  $res =" ";
  echo " <textarea style='width:1000px;height:300px;' >$res</textarea>";
;
}
 ?>
</div>


     </form>

  </body>
</html>
