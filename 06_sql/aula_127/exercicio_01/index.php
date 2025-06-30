<?php

require_once "helpers/base_dados_helper.php";

$form = isset($_GET["min"]) && isset($_GET["max"]);

$min = "";
$max = "";
if($form){
  $min = $_GET["min"];
  $max = $_GET["max"];
  $produtos = select_sql("SELECT * FROM produtos WHERE preco BETWEEN $min AND $max");
}else{
  $produtos = select_sql("SELECT * FROM produtos");
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 127.1</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>SELECT + WHERE + BETWEEN</h1>

<form action="" class="caixa">
  <input type="number" name="min" step="0.01" value="<?=$min?>" required placeholder="min">
  <input type="number" name="max" step="0.01" value="<?=$max?>" required placeholder="max">
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
        <th>ID</th>
        <th>NOME</th>
        <th>PREÇO</th>
        <th>STOCK</th>
        <th>FORNECEDOR</th>
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