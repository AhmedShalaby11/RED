<?php
substr($_SERVER['PATH_INFO'],1);
?>

e.g. www.example.com/somepage/55

And:

<?php
foreach ( explode('/',$_SERVER['PATH_INFO']) as $pair ) {
    list($key,$value) = split('=',$pair,2);
    $param[$key] = stripslashes($value);
}
?> 
