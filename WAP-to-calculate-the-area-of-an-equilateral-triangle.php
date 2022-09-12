<?php
// PHP program to find area
// and perimeter of equilateral triangle

// Function to calculate Area
// of equilateral triangle
function area_equi_triangle( $side)
{
 return sqrt(3) / 4 * $side * $side;
}

// Function to calculate Perimeter
// of equilateral triangle
function peri_equi_triangle( $side)
{
 return 3 * $side;
}

// Driver Code
$side = 4;
echo("Area of Equilateral Triangle: ");
echo(area_equi_triangle($side));
echo("\n");
echo("Perimeter of Equilateral Triangle: ");
echo( peri_equi_triangle($side));
?>
