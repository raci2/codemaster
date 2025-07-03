<?php

require_once "helpers/base_dados_helper.php";

$total = select_sql_unico("SELECT Count(*) as total FROM produtos");
$total_produtos = intval($total["total"]);

$min = select_sql_unico("SELECT Min(preco) as menor FROM produtos");
$min_preco = floatval($min["menor"]);

$max = select_sql_unico("SELECT Max(preco) as maior FROM produtos");
$max_preco = floatval($max["maior"]);

$media = select_sql_unico("SELECT Avg(preco) as media FROM produtos");
$media_preco = floatval($media["media"]);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 130.2</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  
<h1>SELECT + Count() + Min() + Max() + Avg()</h1>

  <div class="caixa">
    <h3>Resultados</h3>
    <br>
    <p>Menor Preço:( <?= number_format($min_preco, 2, ",")?> € )</p>
    <p>Maior Preço:( <?= number_format($max_preco, 2, ",")?> € )</p>
    <p>Média dos Preços:( <?= number_format($media_preco, 2, ",")?> € )</p>
    <p>Total de Produtos:( <?= $total_produtos?> )</p>


 
  </div>


</body>
</html>
