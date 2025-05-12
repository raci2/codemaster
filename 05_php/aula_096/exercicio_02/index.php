<?php

$int = 12;
$float = -1.25;
$bool = true;
$string = "Exemplo de String";

const CONSTANTE_1 = 3;
define("CONSTANTE_2", -9);

echo "<h3>Análise com o var_dump()</h3><br>";

var_dump($int);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($bool);
echo "<br>";
var_dump($string);
echo "<br>";
var_dump(CONSTANTE_1);
echo "<br>";
var_dump(CONSTANTE_2);

echo "<h3>Análise com o print_r()</h3><br>";

print_r($int);
echo "<br>";
print_r($float);
echo "<br>";
print_r($bool);
echo "<br>";
print_r($string);
echo "<br>";
print_r(CONSTANTE_1);
echo "<br>";
print_r(CONSTANTE_2);

?>