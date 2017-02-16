
<table>

<tr>

<div class="container" id='firstReport' >
<ul class='nav nav-pills'><li role='presentation' ><a id='show_add_trend' onclick='get_add_trend();' type='submit' href='#'><i class='fa fa-bar-chart' aria-hidden='true'></i> Add Trend</a></li></div>
<div class="ul_div_body"></div>

  <iframe id="frame1"  src="getreport.php" width="100%" height="400px" style="border-color:white;border-width:0px;" sandbox="allow-scripts"></iframe>

</div>
</tr>
</table>

<script type="text/javascript">
   function get_add_trend(){
    $.ajax({
              type: 'POST',
              url: 'addTrend.php',
               success: function(data) {
                 $('#ul_div_body').empty();
                  $('#ul_div_body').hide();
                   $('#ul_div_body').slideDown();
           $('#ul_div_body').append(data);
          // alert(data);

           }


  });
}

</script>
