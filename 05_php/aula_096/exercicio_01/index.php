<?php

$int = 12;
$float = -1.25;
$bool = true;
$string = "Exemplo de String";

const CONSTANTE_1 = 3;
define("CONSTANTE_2", -9);

echo "<h1 style='color: green;'>Exemplo de inteiro: ($int)</h1>";
echo "<h1 style='color: red;'>Exemplo de inteiro: ($float)</h1>";
echo "<h1 style='color: blue;'>Exemplo de inteiro: ($bool)</h1>";
echo "<h1 style='color: aqua;'>Exemplo de inteiro: ($string)</h1>";
echo "<hr>";
echo "<h1>Exemplo de inteiro: (".CONSTANTE_1.")</h1>";
echo "<h1 style='color: purple;'>Exemplo de inteiro: (".CONSTANTE_2.")</h1>";

?>