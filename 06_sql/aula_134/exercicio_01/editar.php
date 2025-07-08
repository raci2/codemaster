<?php

require_once "helpers/base_dados_helper.php";

$editar = (!empty($_GET["editar"])) ? intval($_GET["editar"]) : "";

$form = !empty($_GET["editar"]) && !empty($_GET["nome"]) && !empty($_GET["preco"]) && isset($_GET["stock"]) && !empty($_GET["codigo"]) && !empty($_GET["fornecedor"]);


if($form){
  $nome = $_GET["nome"];
  $preco = floatval($_GET["preco"]);
  $stock = intval($_GET["stock"]);
  $codigo = intval($_GET["codigo"]);
  $fornecedor = $_GET["fornecedor"];

  idu_sql("UPDATE produtos SET nome='$nome', preco='$preco', stock='$stock', fornecedor='$fornecedor', codigo='$codigo' WHERE id=$editar");
  header("Location: index.php");
}

$pe = select_sql_unico("SELECT * FROM produtos WHERE id=$editar");



?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 133.1</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>UPDATE</h1>

<form action="" class="caixa">
  <h3>Editar Produto</h3>
  <input type="hidden" name="editar" value="<?=$editar?>">
  <br>
  <label for="Nome">Nome:</label>
  <input type="text" id="Nome" name="nome" required placeholder="Nome" autofocus value="<?=$pe["nome"]?>">
  <br><br>
  <label for="Preco">Preço:</label>
  <input type="number" id="Preco" name="preco"  step="0.01" required placeholder="Preço" value="<?=$pe["preco"]?>">
  <br><br>
  <label for="Stock">Stock:</label>
  <input type="number" id="Stock" name="stock" min="0" required placeholder="Stock" value="<?=$pe["stock"]?>">
  <br><br>
  <label for="Codigo">Código:</label>
  <input type="number" id="Codigo" name="codigo" min="100" max="999" required placeholder="Código" value="<?=$pe["codigo"]?>">
  <br><br>
  <label for="Fornecedor">Fornecedor:</label>
  <input type="text" id="Fornecedor" name="fornecedor" required placeholder="Fornecedor" value="<?=$pe["fornecedor"]?>">
  <br><br>
  <input type="submit" value="Enviar">
  <br><br>
  <a href="index.php">
    <button>Cancelar</button>
  </a>
</form>

</body>
</html>