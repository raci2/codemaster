<?php


function fazer_busca($termo){
  global $viagens;
  $resultado = [];
  foreach($viagens as $i => $v){
    if(str_contains(strtolower($v->titulo), strtolower($termo))){
      $resultado[] = [
        "posicao_original" => $i,
        "viagem" => $v
      ];
    }
  }
  return $resultado;
}

?>