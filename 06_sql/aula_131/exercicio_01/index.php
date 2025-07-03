<?php

require_once "helpers/base_dados_helper.php";


$produtos_in = select_sql("SELECT * FROM produtos WHERE fornecedor IN ('Worten', 'FNAC', 'Pingo Doce')");
$produtos_not_in = select_sql("SELECT * FROM produtos WHERE fornecedor NOT IN ('Worten', 'FNAC', 'Pingo Doce')");



?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 131.1</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>SELECT + IN + NOT IN</h1>


<div class="caixa">
   <h3>Todos os produtos que <mark>estão</mark> entre osa fornecedores ("Worten", "FNAC" , "Pingo Doce")</h3>
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

      <?php foreach($produtos_in as $p): ?>
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

<div class="caixa">
   <h3>Todos os produtos que <mark>não estão</mark> entre osa fornecedores ("Worten", "FNAC" , "Pingo Doce")</h3>
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

      <?php foreach($produtos_not_in as $p): ?>
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