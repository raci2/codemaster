<?php

$celsius = $_GET["celsius"] ?? null;
$far = $celsius * 1.8 + 32;
$kelvin = $celsius + 273.15;
$form = !empty($celsius);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 108.1</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <h1>Conversor de Temperaturas</h1>

    <form class="caixa" action="index.php" method="GET">
      <input type="number" name="celsius" placeholder="Celsius" step="0.01" value="<?= $celsius ?>">
      <input type="submit" value="CALCULAR!">
      <br>
      <br>
      <a href="index.php">
        <button type="button">RESET</button>
      </a>

    </a>
    </form>
    
    <?php if ($form): ?>
      <div class="caixa">
        
        <h3><?= number_format($celsius, 2) ?> ºC</h3>  
        <h3><?= number_format($far, 2) ?> ºF</h3>  
        <h3><?= number_format($kelvin, 2) ?> ºK</h3>   
        <br>
        <?php if ($celsius <= 0): ?>
            <img src="imagens/gelo.jpg" alt="T-shirt Branca">
          <?php elseif ($celsius < 100): ?>
            <img src="imagens/agua.jpg" alt="T-shirt Preta">
          <?php else: ?>
            <img src="imagens/vapor.jpg" alt="T-shirt Verde">
          <?php endif ?>

      </div>
    <?php endif ?>

  </body>
</html>
