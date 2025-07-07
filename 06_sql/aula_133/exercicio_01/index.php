<?php
require_once "helpers/base_dados_helper.php";

$produtos = select_sql("SELECT * FROM produtos");
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
        <th>AÇÕES</th> 
      </tr>

      <?php foreach($produtos as $p): ?>
        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= number_format($p["preco"], 2, ",") ?> €</td>
          <td><?= $p["stock"] ?></td>
          <td><?= $p["codigo"] ?></td>
          <td><?= $p["fornecedor"] ?></td>
          <td><a href="editar.php?editar=<?= $p["id"] ?>" class="lixo">✏️</a></td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>

</body>
</html>
