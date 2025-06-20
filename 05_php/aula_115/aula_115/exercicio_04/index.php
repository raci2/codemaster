<?php

require_once "funcoes.php";

// $produtos = [
//   ["nome" => "Caderno", "preco" => 2.99, "stock" => 25],
//   ["nome" => "Borracha", "preco" => 0.75, "stock" => 33],
//   ["nome" => "Papel A4", "preco" => 4.00, "stock" => 10]
// ];

$produtos = [
  criar_produto("Caderno", 2.99, 25),
  criar_produto("Borracha", 0.75, 33),
  criar_produto("Papel A4", 4.00, 10),
];

?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 115.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Entrada</h1>

  <table>
    <tr>
      <th>NOME</th>
      <th>PREÇO</th>
      <th>STOCK</th>
    </tr>
    <?php for($i=0; $i<count($produtos); $i++): ?>

      <tr>
        <td><?= $produtos[$i]["nome"] ?></td>
        <td><?= number_format($produtos[$i]["preco"], 2, ",") ?> €</td>
        <td><?= $produtos[$i]["stock"] ?></td>
      </tr>

    <?php endfor ?>
  </table>

</body>
</html>