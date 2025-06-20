<?php

function nova_pessoa($nome, $idade, $altura, $peso, $genero){
  $dicionario = [
    "nome" => $nome,
    "idade" => $idade,
    "altura" => $altura,
    "peso" => $peso,
    "genero" => $genero
  ];
  return $dicionario;
}

function calc_imc($peso, $altura){
  $resultado = $peso / $altura ** 2;
  return number_format($resultado, 2, ",", "");
}

function calc_imc_2($pessoa){
  $peso = $pessoa["peso"];
  $altura = $pessoa["altura"];
  $resultado = $peso / $altura ** 2;
  return number_format($resultado, 2, ",", "");
}

?>