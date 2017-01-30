<?php

include 'dbconfig.php';
$sql1 = "select * from redgate.chart;";
$res  = $conn->query($sql1);
echo "<!DOCTYPE HTML>
<html>
<head>
<script src='http://canvasjs.com/assets/script/canvasjs.min.js'></script>
<script type='text/javascript'>

window.onload = function () {
	var chart = new CanvasJS.Chart('chartContainer', {
		theme: 'theme2',//theme1
		title:{
			text: 'Basic Chart - Test'
		},
		animationEnabled: false,   // change to true
		data: [
		{
			// Change type to 'bar', 'area', 'spline', 'pie',etc.
			type: 'column',
			dataPoints: [";
while ($row = $res->fetch_array(MYSQLI_NUM))
{
	echo "{ label: 'apple',  y: $row[0]  },";
}



			echo "]
		}
		]
	});
	chart.render();
}
</script>
</head>
<body>
<div id='chartContainer' style='height: 300px; width: 100%;'></div>
</body>
</html>";


 ?>
