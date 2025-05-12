<?php

$valor_1 = 3.141592;
$valor_2 = 5;

echo"<h1>Valor 1: ($valor_1)</h1>";
echo"<h1>Valor 2: ($valor_2) </h1>";

echo "<hr>";

echo "<h1>--- Testes com round() ---</h1>";
echo"<h1>round: (".round($valor_1).") e (".round($valor_2).")</h1>";
echo"<h1>round com 1 casa decimal: (".round($valor_1, 1).") e (".round($valor_2, 1).")</h1>";
echo"<h1>round com 2 casa decimal: (".round($valor_1, 2).") e (".round($valor_2, 2).")</h1>";
echo"<h1>round com 3 casa decimal: (".round($valor_1, 3).") e (".round($valor_2, 3).")</h1>";

echo "<hr>";

echo "<h1>--- Testes com number_format() ---</h1>";
echo"<h1>number_format: (".number_format($valor_1).") e (".number_format($valor_2).")</h1>";
echo"<h1>number_format com 1 casa decimal: (".number_format($valor_1, 1).") e (".number_format($valor_2, 1).")</h1>";
echo"<h1>number_format com 2 casa decimal: (".number_format($valor_1, 2).") e (".number_format($valor_2, 2).")</h1>";
echo"<h1>number_format com 3 casa decimal: (".number_format($valor_1, 3).") e (".number_format($valor_2, 3).")</h1>";
echo"<h1>number_format com 3 casa decimal e com vírgula: (".number_format($valor_1, 3, ",").") e (".number_format($valor_2, 3, ",").")</h1>";
?>