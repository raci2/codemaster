<?php
$c = 16;

$f = $c * 1.8 + 32;
$k = $c + 273.15;


echo "<h1>=== Conversor de Temperatura PHP ===</h1>";
echo "<h2>Celsius = ( ".number_format($c, 2)." ºC )</h2>";
echo "<hr>";
echo "<h2>( ".number_format($c, 2)." ºC ) = ( ".number_format($f, 2)." F )</h2>";
echo "<h2>( ".number_format($c, 2)." ºC ) = ( ".number_format($k, 2)." ºK )</h2>";
echo "<h2></h2>";


?>