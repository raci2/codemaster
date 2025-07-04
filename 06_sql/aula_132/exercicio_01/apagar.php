<?php

require_once "helpers/base_dados_helper.php";

$apagar = (!empty($_GET["apagar"])) ? intval($_GET["apagar"]) : "";

$form = !empty($_GET["apagar"]) && !empty($_GET["resposta"]);

if($form){
  idu_sql("DELETE FROM produtos WHERE id=$apagar");
  header("Location: index.php");
}

$produto = select_sql("SELECT * FROM produtos ORDER BY id DESC");



?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 132.1</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>DELETE FROM</h1>
  
<div class="caixa">
  <h3>Tem certeza que deseja apagar o produto?</h3>
  <h3>(<?= $produto[0]["id"] ?> - <?= $produto[0]["nome"] ?>)</h3>
  <br>
  <a href="apagar.php?apagar=<?= $produto[0]["id"] ?>&resposta=sim" class="lixo">✅ Sim</a>
  <a href="index.php" class="nao">❌ Não</a>
  
</div>

</body>
</html>