<?php

// PYTHON
// p1 = ["fabricio", "porto", "lisboa", 32, 40, 1.85, 45.67]
// p2 = {
//   "nome": "maria",
//   "apelido": "silva",
//   "morada": "almada",
//   "idade": 32,
//   "saldo_promo": 15,
//   "altura": 1.65,
//   "peso": 50,
// }



// PHP
$p1 = ["fabricio", "porto", "lisboa", 32, 40, 1.85, 45.67];
$p2 = [
  "nome" => "maria",
  "apelido" => "silva",
  "morada" => "almada",
  "idade" => 32,
  "saldo_promo" => 15,
  "altura" => 1.65,
  "peso" => 50,
];

echo "<h3>" . $p1[1] . "</h3>";
$p1[3] = 33;

echo "<h3>" . $p2["apelido"] . "</h3>";
$p2["idade"] = 33;






$pessoas = [
  ["nome" => "fabricio", "idade" => 30, "morada" => "covilha"],
  ["nome" => "maria", "idade" => 12, "morada" => "almada"],
  ["nome" => "josé", "idade" => 21, "morada" => "lisboa"]
];

// print(pessoas[1]["idade"])
echo "<h3>" . $pessoas[1]["idade"] . "</h3>";
echo "<h3>" . $pessoas[2]["morada"] . "</h3>";

$pessoas[0]["morada"] = "porto";


for($i=0; $i<count($pessoas); $i++){
  echo "<h3>" . $pessoas[$i]["nome"] . " - " . $pessoas[$i]["idade"] . " - ". $pessoas[$i]["morada"] . "</h3>";
}


?>