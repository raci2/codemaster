<?php

$temperatura = 50;
$esta_a_chover = true;
echo "<h1>=== Início ===</h1>";
echo "<h3>Temperatura = ($temperatura ºC)</h3>";
echo "<h3>Está a chover = bool(true)</h3>";
echo "<hr>";

if($temperatura < 18){
  echo "<h3>Vestir roupas Grossas e Casaco.</h3>";
}elseif($temperatura < 28){
  echo "<h3>Vestir roupas Normais.</h3>";
}else{
  echo "<h3>Vestir roupas de Praia.</h3>";
}

if($esta_a_chover == true){
  echo "<h3>Pegar chapéu de chuva.</h3>";
}

echo "<h3>Ir passear.</h3>";

echo "<h1>=== Fim ===</h1>";

?>