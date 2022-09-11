<?php
$x = 100;
$y = 200;
echo "\n Before swapping: ". $x . ',' . $y;
list($x, $y) = array($y, $x);
echo "\n After swapping:  ". $x . ',' . $y."\n"; 
?>

