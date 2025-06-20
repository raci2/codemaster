<?php


function nova_viagem($nome, $imagem, $texto){
  $dicionario = [
    "nome" => $nome,
    "imagem" => $imagem,
    "texto" => $texto
  ];
  return $dicionario;
}


?>