<?php

require_once "helpers/base_dados_helper.php";

$form = !empty($_GET["Coluna"]) && !empty($_GET["Ordenacao"]);
$coluna = "";
$ordenacao = "";

if($form){
  $coluna = $_GET["Coluna"];
  $ordenacao = $_GET["Ordenacao"];
  $ordenacao = ($ordenacao == "crescente") ? "ASC" : "DESC";
  $produtos = select_sql("SELECT * FROM produtos ORDER BY $coluna $ordenacao");
}else{
  $produtos = select_sql("SELECT * FROM produtos");
}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 127.2</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>SELECT + ORDER BY</h1>

<form action="" class="caixa">
  <h3>Formulário</h3>
  <br>
  <label for="coluna">Coluna:</label>
  <select name="Coluna" id="coluna">
    <option value="id">ID</option>
    <option value="nome">Nome</option>
    <option value="preco">Preço</option>
    <option value="stock">Stock</option>
    <option value="fornecedor">Fornecedor</option>
  </select>
  <br><br>
  <label for="oredenacao">Ordenação:</label>
  <select name="Ordenacao" id="ordenacao">
    <option value="crescente">Crescente</option>
    <option value="decrescente">Decrescente</option>
  </select>
  <br><br>
  <input type="submit" value="Enviar">
  <br><br>
  <a href="index.php">
    <button type="button">Reset</button>
  </a>
</form>

<div class="caixa">
  <h3>Todos os Produtos</h3>
  <br>
  <div class="tabela">
    <table>
      <tr>
        <th <?= $coluna == 'id' ? 'class="coluna"' : '' ?>>ID <?= ($coluna == 'id') ? ($ordenacao == 'crescente' ? '▲' : '▼') : '' ?></th>
        <th <?= $coluna == 'nome' ? 'class="coluna"' : '' ?>>NOME <?= ($coluna == 'nome') ? ($ordenacao == 'crescente' ? '▲' : '▼') : '' ?></th>
        <th <?= $coluna == 'preco' ? 'class="coluna"' : '' ?>>PREÇO <?= ($coluna == 'preco') ? ($ordenacao == 'crescente' ? '▲' : '▼') : '' ?></th>
        <th <?= $coluna == 'stock' ? 'class="coluna"' : '' ?>>STOCK <?= ($coluna == 'stock') ? ($ordenacao == 'crescente' ? '▲' : '▼') : '' ?></th>
        <th <?= $coluna == 'fornecedor' ? 'class="coluna"' : '' ?>>FORNECEDOR <?= ($coluna == 'fornecedor') ? ($ordenacao == 'crescente' ? '▲' : '▼') : '' ?></th>
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