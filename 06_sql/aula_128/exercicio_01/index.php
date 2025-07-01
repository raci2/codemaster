<?php

require_once "helpers/base_dados_helper.php";

$form = !empty($_GET["Coluna"]) && !empty($_GET["Ordenacao"]) && isset($_GET["min"]) && isset($_GET["max"]);

$min = "";
$max = "";
$coluna = "";
$ordenacao = "";

if($form){
  $coluna = $_GET["Coluna"];
  $ordenacao = $_GET["Ordenacao"];
  $min = floatval($_GET["min"]);
  $max = floatval($_GET["max"]);
  $ordenacao = ($ordenacao == "crescente") ? "ASC" : "DESC";
  $produtos = select_sql("SELECT * FROM produtos WHERE preco BETWEEN $min AND $max ORDER BY $coluna $ordenacao ");
}else{
  $produtos = select_sql("SELECT * FROM produtos");
}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 128.1</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>SELECT + WHERE + BETWEEN + ORDER BY</h1>

<form action="" class="caixa">
  <h3>Formulário</h3>
  <br>
  <input type="number" name="min" step="0.01" value="<?=$min?>" required placeholder="min">
  <input type="number" name="max" step="0.01" value="<?=$max?>" required placeholder="max">
  <br><br>
  <label for="coluna">Coluna:</label>
  <select name="Coluna" id="coluna">
    <option value="id" <?= ($coluna == 'id') ? 'selected' : '' ?>>ID</option>
    <option value="nome" <?= ($coluna == 'nome') ? 'selected' : '' ?>>Nome</option>
    <option value="preco" <?= ($coluna == 'preco') ? 'selected' : '' ?>>Preço</option>
    <option value="stock" <?= ($coluna == 'stock') ? 'selected' : '' ?>>Stock</option>
    <option value="fornecedor" <?= ($coluna == 'fornecedor') ? 'selected' : '' ?>>Fornecedor</option>
  </select>
  <br><br>
  <label for="oredenacao">Ordenação:</label>
  <select name="Ordenacao" id="ordenacao">
    <option value="crescente" <?= ($ordenacao == 'ASC') ? 'selected' : '' ?>>Crescente</option>
    <option value="decrescente" <?= ($ordenacao == 'DESC') ? 'selected' : '' ?>>Decrescente</option>
  </select>
  <br><br>
  <input type="submit" value="Enviar">
  <br><br>
  <a href="index.php">
    <button type="button">Reset</button>
  </a>
</form>

<div class="caixa">
   <?php
    if($form){
      echo "<h3>Produtos entre ($min €) e ($max €)</h3>";
    }else{
      echo "<h3>Meus produtos</h3>";
    }
  ?>
  <br>
  <div class="tabela">
    <table>
      <tr>
        <th <?= $coluna == 'id' ? 'class="coluna"' : '' ?>>ID <?= ($coluna == 'id') ? ($ordenacao == 'ASC' ? '▲' : '▼') : '' ?></th>
        <th <?= $coluna == 'nome' ? 'class="coluna"' : '' ?>>NOME <?= ($coluna == 'nome') ? ($ordenacao == 'ASC' ? '▲' : '▼') : '' ?></th>
        <th <?= $coluna == 'preco' ? 'class="coluna"' : '' ?>>PREÇO <?= ($coluna == 'preco') ? ($ordenacao == 'ASC' ? '▲' : '▼') : '' ?></th>
        <th <?= $coluna == 'stock' ? 'class="coluna"' : '' ?>>STOCK <?= ($coluna == 'stock') ? ($ordenacao == 'ASC' ? '▲' : '▼') : '' ?></th>
        <th <?= $coluna == 'fornecedor' ? 'class="coluna"' : '' ?>>FORNECEDOR <?= ($coluna == 'fornecedor') ? ($ordenacao == 'ASC' ? '▲' : '▼') : '' ?></th>
      </tr>

      <?php foreach($produtos as $p): ?>
        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= number_format($p["preco"], 2, ",") ?> €</td>
          <td><?= $p["stock"] ?></td>
          <td><?= $p["fornecedor"] ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>

</body>
</html>