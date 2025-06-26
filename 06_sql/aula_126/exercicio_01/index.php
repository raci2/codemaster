<?php

require_once "helpers/base_dados_helper.php";

$fornecedor = select_sql("SELECT * FROM produtos WHERE fornecedor = 'Gamer PT'");
$preco = select_sql("SELECT * FROM produtos WHERE preco >= 90");
$preco2 = select_sql("SELECT * FROM produtos WHERE preco >= 2 AND preco <= 6");
$id = select_sql("SELECT * FROM produtos WHERE id % 2 = 0");
$stock = select_sql("SELECT * FROM produtos WHERE fornecedor = 'Canetas Portugal' OR stock = 0");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 126.1</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>SELECT</h1>

<div class="caixa">

  <h3>Onde fornecedor é igual a "Gamer PT"</h3>
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
      <?php foreach($fornecedor as $p): ?>
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
<br><br>

<hr>

<br><br>
<div class="caixa">
  <h3>Onde o preço é maior ou igual a 90€</h3>
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
      <?php foreach($preco as $p): ?>
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
<br><br>

<hr>

<br><br>
<div class="caixa">
  <h3>Onde o preço está entre 2€ a 6€ inclusivamente</h3>
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
      <?php foreach($preco2 as $p): ?>
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
<br><br>

<hr>

<br><br>
<div class="caixa">
  <h3>Onde o id é um número par</h3>
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
      <?php foreach($id as $p): ?>
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
<br><br>

<hr>

<br><br>
<div class="caixa">
  <h3>Onde o fornecedor é "Canetas Portugal" ou a quantidade é igual a 0</h3>
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
      <?php foreach($stock as $p): ?>
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