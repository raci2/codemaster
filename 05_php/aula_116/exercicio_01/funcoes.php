<?php

function criar_pessoa($nome, $idade, $altura, $peso, $genero){
  $dicionario = [
    "nome" => $nome,
    "idade" => $idade,
    "altura" => $altura,
    "peso" => $peso,
    "genero" => $genero
  ];
  return $dicionario;
}

?>