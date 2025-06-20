<?php


$produtos = ["caderno", "caneta", "lapis", "borracha", "papel"];

for($i=0; $i<count($produtos); $i++){
  echo "<h2>" . $produtos[$i] . "</h2>";
}

echo "<hr>";

// for i in produtos: print(i)

foreach($produtos as $i){
  echo "<h2>" . $i . "</h2>";
}

echo "<hr>";

// === SEGUNDA PARTE ===
$produtos_2 = [
  ["nome" => "caderno", "preco" => 1.25],
  ["nome" => "caneta", "preco" => 0.99],
  ["nome" => "lapis", "preco" => 0.75],
  ["nome" => "borracha", "preco" => 2.99],
  ["nome" => "papel", "preco" => 4.00]
];

for($i=0; $i<count($produtos_2); $i++){
  echo "<h2>" . $produtos_2[$i]["nome"] . " - " . $produtos_2[$i]["preco"] . "</h2>";
}

echo "<hr>";

foreach($produtos_2 as $p){
  echo "<h2>" . $p["nome"] . " - " . $p["preco"] . "</h2>";
}

?>