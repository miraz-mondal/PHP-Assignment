<?php
$fahrenheit = readline("Enter the fahrenheit: ");
$celsius = (($fahrenheit - 32) * 5) / 9;
// round() is used to limit the number of digit after the decimal
$celsius = round($celsius, 3);              
echo "Temperature in celsius is: $celsius";
?>