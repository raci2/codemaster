<?php

require_once "helpers/base_dados_helper.php";

$form = !empty($_GET["pesquisa"]) && isset($_GET["limite"]) && isset($_GET["ignorar"]);

$pesquisa = "";
$limite = "";
$ignorar = "";

if($form){
  $pesquisa = $_GET["pesquisa"];
  $limite = intval($_GET["limite"]);
  $ignorar = intval($_GET["ignorar"]);
  $produtos = select_sql("SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%' LIMIT $limite OFFSET $ignorar");
}else{
  $produtos = select_sql("SELECT * FROM produtos");
}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 129.2</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>SELECT + WHERE + LIKE</h1>

<form action="" class="caixa">
  <h3>Formulário</h3>
  <br>
  <input type="text" name="pesquisa" value="<?=$pesquisa?>" required placeholder="Pesquisa" autofocus>
  <br><br>
  <input type="number" name="limite" value="<?=$limite?>"required placeholder="Limite de Resultados">
  <br><br>
  <input type="number" name="ignorar" value="<?=$ignorar?>" required placeholder="Ignorar primeiros">
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
      echo "<h3>Resultado da pesquisa por ($pesquisa)</h3>";
    }else{
      echo "<h3>Todos os produtos</h3>";
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