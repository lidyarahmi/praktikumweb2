<?php 
$Celcius = 37.841;
$Fahrenheit = round(($Celcius * 9/5 + 32),4);
$Reamur = round(($Celcius * 4/5),4);
$Kelvin = round(($Celcius + 273.15),4);

echo "Fahrenheit (F) = $Fahrenheit <br>";
echo "Reamur (R) = $Reamur <br>";
echo "Kelvin (K) = $Kelvin <br>";

?>