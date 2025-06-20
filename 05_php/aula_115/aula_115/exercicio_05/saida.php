<?php

require_once "funcoes.php";

$form = !empty($_GET["nome"]) && !empty($_GET["preco"]) && isset($_GET["stock"]);
if($form){
  $nome = $_GET["nome"];
  $preco = $_GET["preco"];
  $stock = $_GET["stock"];
  $novo_produto = criar_produto($nome, $preco, $stock);
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

  <h3>
    <?= $novo_produto["nome"] ?> - <?= $novo_produto["preco"] ?> - <?= $novo_produto["stock"] ?>
  </h3>

  <pre>
    <?php print_r($novo_produto) ?>
  </pre>

</body>
</html>