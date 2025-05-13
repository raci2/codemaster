<?php

$data_atual = intval(date("Y"));
$data_nascimento = 1975;

$idade = $data_atual - $data_nascimento;
echo "<h1>===== Cálculo da Idade =====</h1>";
echo "<h2>Ano atual: ( $data_atual )</h2>";
echo "<h2>Ano de nascimento: ( $data_nascimento )</h2>";
echo "<h2>Então, este ano completa: ( $idade )</h2>";


?>