<?php

$idade = 20;

echo "<h1>=== Carta de Condução ===</h1>";
echo "<h3>Idade = ($idade anos).</h3>";
echo "<hr>";

if($idade >= 18){
  echo "<h3>Você <span style='background-color: yellow'>JÁ</span> pode ter uma carta de condução.</h3>";
}else{
  echo "<h3>Você <span style='background-color: yellow'>NÃO</span> pode ter uma carta de condução.</h3>";
}




?>