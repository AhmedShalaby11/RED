<?php


$collection = array();
for($i = 1; $i < 10; $i++){
	$ukey = strtoupper(substr(sha1(microtime() . $i), rand(0, 5), 25));
	if(!in_array($ukey, $collection)){ // you can check this in database as well.
		$collection[] = implode("-", str_split($ukey, 5));
	}
}




 ?>
