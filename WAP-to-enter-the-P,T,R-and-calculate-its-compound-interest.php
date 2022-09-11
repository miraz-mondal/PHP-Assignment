<?php
// PHP program to enter P, T, R, and calculate Compound Interest

$p = 5;
$t = 7;
$r = 9;
$CI = NULL;

// p = principle
// t = time
// r = rate
// CI = compound interest

// Calculate compound interest
$CI = $p * (pow((1 + $r / 100), $t));

// Output
echo "Compound Interest = " . $CI;

?>