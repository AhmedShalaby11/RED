<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>VCONNECT</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>

  <!-- Optional theme -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>

  <!-- Latest compiled and minified JavaScript -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

  <!-- Latest compiled and minified CSS -->

  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">RegGate</a>
        </div>
        <ul class="nav navbar-nav" id="li1s">
        <li><a href="#">Link1</a></li>
        <li><a href="#">Link2</a></li>
        <li><a href="#">Link3</a></li>

        </ul>
      </div>
    </nav>

<div class="container">
  <ul class="nav nav-tabs">
  <li role="presentation" id="li_data" name="data"><a href="#" >Data</a></li>
  <li role="presentation" id="li_action" name="action"><a href="#">Action</a></li>
  <li role="presentation" id="li_messages" name="messages"><a href="#">Messages</a></li>
</ul>
<div class="" id="ul_div_body">

</div>

</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('li').click(function(){
      $('li').removeClass("active");
      $(this).addClass("active");
      $('#ul_div_body').empty();
      if ($(this).attr('name')== "data"){
$('#ul_div_body').append("<h3>this is data</h3>")


        }
        else if ($(this).attr('name')== "action") {
$('#ul_div_body').append("<h3>this is action</h3>")
        }
        else if ($(this).attr('name')== "messages") {
$('#ul_div_body').append("<h3>this is messages</h3>")
        }

    })

  });

</script>


  </body>
</html>
