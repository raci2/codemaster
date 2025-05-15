<?php

$nome = "José Campos";
$idade = 43;

echo "<h1>===== Verificação de Idade =====</h1>";
echo "<h2>Nome: ($nome)</h2>";
echo "<h2>Idade: ($idade)</h2>";
echo "<hr>";

if($idade <= 11){
  echo "<marquee scrollamount='14' direction='left'><b>$nome</b> tem <b>$idade</b> anos de idade, logo é um(a) <b>CRIANÇA.</b></marquee>";
}elseif($idade < 18){
  echo "<marquee scrollamount='14' direction='left'><b>$nome</b> tem <b>$idade</b> anos de idade, logo é um(a) <b>ADOLESCENTE.</b></marquee>";
}elseif($idade < 33){
  echo "<marquee scrollamount='14' direction='left'><b>$nome</b> tem <b>$idade</b> anos de idade, logo é um(a) <b>JOVEM ADULTO.</b></marquee>";
}elseif($idade < 60){
  echo "<marquee scrollamount='14' direction='left'><b>$nome</b> tem <b>$idade</b> anos de idade, logo é um(a) <b>ADULTO.</b></marquee>";
}else{
  echo "<marquee scrollamount='14' direction='left'><b>$nome</b> tem <b>$idade</b> anos de idade, logo é um(a) <b>IDOSO.</b></marquee>";
}

?>
