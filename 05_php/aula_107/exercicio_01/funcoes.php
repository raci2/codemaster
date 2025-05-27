<?php

function converter_euro_dolar($euro){
  $dolar = $euro * 1.03;
  echo "<h2>( ".number_format($euro, 2)." € ) = ( $ ".number_format($dolar, 2)." )</h2>";
}

function converter_euro_libra($euro){
  $libra = $euro * 0.84;
  echo "<h2>( ".number_format($euro, 2)." € ) = ( £ ".number_format($libra, 2)." )</h2>";
}

function converter_euro_real($euro){
  $real = $euro * 6.19;
  echo "<h2>( ".number_format($euro, 2)." € ) = ( R$ ".number_format($real, 2)." )</h2>";
}

function converter_euro_iene($euro){
  $iene = $euro * 161.05;
  echo "<h2>( ".number_format($euro, 2)." € ) = ( ¥ ".number_format($iene, 2)." )</h2>";
}

?>
