<?php

require_once "helpers/base_dados_helper.php";

$form = !empty($_GET["nome"]) && !empty($_GET["preco"]) && isset($_GET["quantidade"]) && !empty($_GET["codigo"]) && !empty($_GET["fornecedor"]);


if($form){
  $nome = $_GET["nome"];
  $preco = floatval($_GET["preco"]);
  $quantidade = intval($_GET["quantidade"]);
  $codigo = intval($_GET["codigo"]);
  $fornecedor = $_GET["fornecedor"];

  $produtos = idu_sql("INSERT INTO produtos (nome, preco, stock, fornecedor, codigo) VALUES ('$nome', $preco, $quantidade, '$fornecedor', $codigo)");
  header("Location: index.php");
}

$produtos = select_sql("SELECT * FROM produtos ORDER BY id DESC");



?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 131.2</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>INSERT INTO</h1>

<form action="" class="caixa">
  <h3>Novo Produto</h3>
  <br>
  <input type="text" name="nome" required placeholder="Nome" autofocus>
  <input type="number" name="preco"  step="0.01" required placeholder="Preço">
  <br><br>
  <input type="number" name="quantidade" min="0" required placeholder="Quantidade">
  <input type="number" name="codigo" min="100" max="999" required placeholder="Código">
  <br><br>
  <input type="text" name="fornecedor" required placeholder="Fornecedor">
  <br><br>
  <input type="submit" value="Enviar">
  <br><br>
  <a href="index.php">
    <button type="button">Reset</button>
  </a>
</form>

<div class="caixa">
   <h3>Todos os produtos</h3>
  <br>
  <div class="tabela">
    <table>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>PREÇO</th>
        <th>STOCK</th>
        <th>CÓDIGO</th>
        <th>FORNECEDOR</th> 
      </tr>

      <?php foreach($produtos as $p): ?>
        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= number_format($p["preco"], 2, ",") ?> €</td>
          <td><?= $p["stock"] ?></td>
          <td><?= $p["codigo"] ?></td>
          <td><?= $p["fornecedor"] ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>

</body>
</html>