<?php
// PHP program to convert centimeter into meter and kilometer

$cm; $meter; $kilometer;
$cm = 1000;

// Converting centimeter into meter and kilometer

$meter = $cm / 100.0;
$kilometer = $cm / 100000.0;

// echo

echo "Length in meter = " ,
		$meter ,"m" , "\n";

echo "Length in Kilometer = " ,
	$kilometer , "km" ,"\n";
?>
