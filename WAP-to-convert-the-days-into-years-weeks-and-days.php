<?php
// PHP program to convert days into years, weeks and days
$d = 464; // d = days
$y = NULL; // y = years
$w = NULL; // w = weeks

// Conversion of days in to years, weeks and days
$y = (int)($d / 365);
$w = (int)(($d % 365) / 7);
$d = (int)($d - (($y * 365) + ($w)));

// Output
echo $y . " Year, " . $w . " Weeks, and " . $d . " Days\n";
?>