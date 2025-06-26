<?php

require_once "helpers/base_dados_helper.php";

$produtos = select_sql("SELECT * FROM produtos");
$produtos_n = select_sql("SELECT nome,preco FROM produtos");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 125.1</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>SELECT</h1>

<div class="caixa">

  <h3>*</h3>
  <br>
  <div class="tabela">
    <table>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>PREÇO</th>
        <th>STOCK</th>
      </tr>
      <?php foreach($produtos as $p): ?>
        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= number_format($p["preco"], 2, ",") ?> €</td>
          <td><?= $p["stock"] ?> uni.</td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>
  <br><br>

  <hr>

  <br><br>
<div class="caixa">
  <h3>nome,preco</h3>
  <br>
    <div class="tabela">
      <table>
        <tr>
          <th>NOME</th>
          <th>PREÇO</th>
        </tr>
        <?php foreach($produtos_n as $p): ?>
          <tr>
            <td><?= $p["nome"] ?></td>
            <td><?= number_format($p["preco"], 2, ",") ?> €</td>
        <?php endforeach ?>
      </table>
    </div>
</div>

</body>
</html>