<?php

echo "<div class='container' id='$bar_id'>
  <h2>$bar_header<i class='fa fa-cog fa-spin fa-1x fa-fw'></i></h2>
  <h4>$bar_subheader</h4>
  <div class='progress' >
<div class='progress-bar progress-bar-striped progress-bar-danger  active' role='progressbar' id='prbar' aria-valuemin='0' aria-valuemax='100' >Starting..
    </div>
  </div>
</div>
";


echo "<script>
$(document).ready(function (){
function explode(){
$('#prbar').css('width','30%');
$('#prbar').text('$bar_30');


function explode2(){
$('#prbar').css('width','50%');
$('#prbar').removeClass('progress-bar-danger');
$('#prbar').addClass('progress-bar-danger');
$('#prbar').text('$bar_50');


function explode3(){
$('#prbar').css('width','80%');
$('#prbar').removeClass('progress-bar-warning');
$('#prbar').addClass('progress-bar-danger');
$('#prbar').text('$bar_80');


function explode4(){
$('#prbar').css('width','100%');
$('#prbar').text('$bar_100');
$('#prbar').removeClass('progress-bar-primary');
$('#prbar').addClass('progress-bar-success');
$('#div_bar').slideUp(2000);
  $bar_action

}
setTimeout(explode4, 2000);

}
setTimeout(explode3, 1000);

}
setTimeout(explode2, 1000);
}
setTimeout(explode, 500);


});
</script>
";
 ?>
