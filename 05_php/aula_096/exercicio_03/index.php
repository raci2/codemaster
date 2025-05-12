<?php

$a = 8;
$b = 3;

$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
$resto = $a % $b;
$potencia = $a ** $b;


echo"<h1>=== Testes Matemáticos =====</h1>";
echo"<h1>A = ($a)</h1>";
echo"<h1>B = ($b) </h1>";
echo "<hr>";

echo"<h1>SOMA = ($soma)</h1>";
echo"<h1>SUBTRAÇÃO = ($subtracao)</h1>";
echo"<h1>MULTIPLICAÇÃO = ($multiplicacao)</h1>";
echo"<h1>DIVISÃO = (".round($divisao, 2).")</h1>";
echo"<h1>RESTO DA DIVISÃO = ($resto)</h1>";
echo"<h1>ELEVADO = ($potencia)</h1>";

?>