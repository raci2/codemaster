<?php

require_once "funcoes.php";
require_once "globais.php";

$form = !empty($_GET["nome"]) && !empty($_GET["preco"]) && isset($_GET["stock"]);
if($form){
  $nome = $_GET["nome"];
  $preco = $_GET["preco"];
  $stock = $_GET["stock"];
  $novo_produto = criar_produto($nome, $preco, $stock);
  $produtos[] = $novo_produto;
}

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