<?php

$inicio = $_GET["inicio"] ?? null;
$fim = $_GET["fim"] ?? null;
$form = !isset($inicio) && !isset($fim);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 110.1</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <h1>Lista Numérica</h1>

    <form class="caixa" action="index.php" method="GET">
      <input type="number" name="inicio" placeholder="Inicio" value="<?= $inicio ?>">
      <br><br>
      <input type="number" name="fim" placeholder="Fim" value="<?= $fim ?>">
      <br><br>
      <input type="submit" value="Enviar">
      <br><br>
      <a href="index.php">
        <button type="button">Reset</button>
      </a>

    </a>
    </form>
    
    <?php if ($form): ?>
      <div class="caixa">
        <h3>Resultado</h3>
        <div class="result">
          <div>
            <h3>Resultado com <mark>FOR</mark></h3>
            <?php 
              for($i = $inicio; $i <= $fim; $i++){
                echo "$i<br>";
              }
             ?>
          </div>
          <div>
            <h3>Resultado com <mark>WHILE</mark></h3>
            <?php 
              $loop = $inicio; 
              while($loop <= $fim){ 
                echo "$loop<br>"; 
                $loop++;
              } 
             ?>
          </div>
        </div>
      </div>

      <div class="caixa">
        <h3>Desafio</h3>
        <div class="result">
          <div>
            <h3>Resultado com <mark>FOR</mark></h3>
            <?php 
              for($i = $fim; $i >= $inicio; $i--){
                echo "$i<br>"; 
              }
             ?>
          </div>
          <div>
            <h3>Resultado com <mark>WHILE</mark></h3>
            <?php
              $loop = $fim; 
              while($loop >= $inicio){ 
                echo "$loop<br>";
                $loop--;
              }
            ?>
          </div>
        </div>
      </div>
    <?php endif ?>

  </body>
</html>
