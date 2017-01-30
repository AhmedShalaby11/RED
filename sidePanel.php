<?php
include 'lib.php';
if ($template== "processing")
{
echo "<div class='container'>
<h3>Successfully</h3>
<div id='notification' class='bs-callout bs-callout-danger' > <h4>$message1</h4><p>$message2</p><i class='fa fa-refresh fa-spin fa-1x fa-fw'></i>
</div>
</div>";
}
elseif ($template =="fail")
{
  echo "<div class='container'>
  <h3>Error Occured</h3>
  <div id='notification' class='bs-callout bs-callout-danger' > <h4>$message1</h4><p>$message2</p><i class='fa fa-exclamation-triangle'></i>
</div>
  </div>";
}
elseif ($template =="no")
{
  echo "<div class='container'>
  <h3>$header</h3>
  <div id='notification' $add_style class=' container bs-callout bs-callout-$color' >
 <h2>$message1</h2><p>$message2</p>
</div>
  </div></div>";
}



 ?>
