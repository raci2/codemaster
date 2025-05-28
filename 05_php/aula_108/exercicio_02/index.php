<?php

$raio = $_GET["raio"] ?? null;
$comprimento = 2 * pi() * $raio;
$form = !empty($raio);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 108.2</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <h1>CÁLCULO DO COMPRIMENTO DA CIRCUNFÊRENCIA</h1>

    <form class="caixa" action="index.php" method="GET">
      <input type="number" name="raio" placeholder="RAIO" step="0.01">
      <br>
      <br>
      <input type="submit" value="CALCULAR!">
      <br>
      <br>
      <a href="index.php">
        <button type="button">RESET</button>
      </a>

    </a>
    </form>
    
    <?php if ($form): ?>
      <div>
        
        <img src="imagens/circulo.jpg" alt="circulo">
        <h3 class="raio"><?= number_format($raio, 2) ?></h3>
        <h3 class="comp"><?= number_format($comprimento, 2) ?></h3>


      </div>
    <?php endif ?>

  </body>
</html>
