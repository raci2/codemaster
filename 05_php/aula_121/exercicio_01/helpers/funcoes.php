<?php

function novo_filme($nome, $imagem, $texto){
  $dicionario = [
    "nome" => $nome,
    "imagem" => $imagem,
    "texto" => $texto
  ];
  
  return $dicionario;
}

function novo_banner($titulo, $imagem, $legenda){
  $dicionario = [
    "titulo" => $titulo,
    "imagem" => $imagem,
    "legenda" => $legenda
  ];
  return $dicionario;
}

?>