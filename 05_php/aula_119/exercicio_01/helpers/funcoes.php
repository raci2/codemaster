<?php


function novo_filme($nome, $imagem, $texto){
  $dicionario = [
    "nome" => $nome,
    "imagem" => $imagem,
    "texto" => $texto
  ];
  return $dicionario;
}


?>