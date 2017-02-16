<?php
include 'lib1.php';
$username  = gethostname();
$databae = 'redgate';
$table = 'table_trend_config';
include 'dbconfig.php';
//query 1
//changes div.name 3
//chart.name 3
//js chartname 3
//chart title 2
//chart type 4
//column schema 5
//---------------

$sql_getChartConfig = "select * from $database.$table ;";
$chartConfig= $conn->query($sql_getChartConfig);
while ($config = $chartConfig -> fetch_array(MYSQLI_NUM)) {
$sql1 =$config[1];

$res  = $conn->query($sql1);
echo "

<td>
<div id='welcomePanel' class='bs-callout bs-callout-danger' > <h3>".$config[2]."</h3> <p></p> </div>
<div id='".$config[3]."' style=' height:300px;'>
</td>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='http://canvasjs.com/assets/script/canvasjs.min.js'></script>
<script type='text/javascript'>
$(document).ready(function () {
	var ".$config[3]." = new CanvasJS.Chart('".$config[3]."', {
		theme: 'theme1',//theme1
		title:{
			text: 'Interface to Customer - Test'
		},
		animationEnabled: true,   // change to true
		data: [
		{
			// Change type to 'bar', 'area', 'spline', 'pie',etc.
			type: '".$config[4]."',
			dataPoints: [";
while ($row = $res->fetch_array(MYSQLI_NUM))
{
	echo "{ label: '$row[0]',  y: $row[1]  },";
}
			echo "]
		}
		]
	});
	".$config[3].".render();
});
</script>
</div>


<script>
$(document).ready(function(){
  $('.canvasjs-chart-credit').text('Integration Management Reporting');
  $('.canvasjs-chart-credit').css({'color':'red','font-size':'large'});
});
</script>
";
}
 ?>
