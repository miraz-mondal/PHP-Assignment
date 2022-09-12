<?php
// PHP program to find all angles of a triangle if two angles are given
$p = 50;
$q = 70;
$r = NULL;

// p, q, and r is all angles of the triangle

// Compute third angle
$r = 180 - ($p + $q);

// Output
echo "Third angle of the triangle = " . $r;
?>