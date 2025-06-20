<?php

function criar_produto($nome, $preco, $stock){
  $dicionario = [
    "nome" => $nome,
    "preco" => $preco,
    "stock" => $stock
  ];
  return $dicionario;
}

?>