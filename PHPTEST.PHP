<?php

include 'dbconfig.php';
$sql1 = "select distinct (old_interface) ,count(old_interface) from redgate.table_id_log group by old_interface ;";
$res  = $conn->query($sql1);
echo "



<div id='firstReport' style=' height:300px;width: 100%;'>


<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

<script src='http://canvasjs.com/assets/script/canvasjs.min.js'></script>
<script type='text/javascript'>

window.onload = function () {
	var chart = new CanvasJS.Chart('firstReport', {
		theme: 'theme2',//theme1
		title:{
			text: 'Interface to Customer - Test'
		},
		animationEnabled: true,   // change to true
		data: [
		{
			// Change type to 'bar', 'area', 'spline', 'pie',etc.
			type: 'splineArea',
			dataPoints: [";
while ($row = $res->fetch_array(MYSQLI_NUM))
{
	echo "{ label: '$row[0]',  y: $row[1]  },";
}



			echo "]
		}
		]
	});
	chart.render();
}
</script>



</div>
<script>
$(document).ready(function(){
  $('.canvasjs-chart-credit').text('Integration Management Reporting');
  $('.canvasjs-chart-credit').css({'color':'red','font-size':'large'});
});
</script>
";


 ?>
