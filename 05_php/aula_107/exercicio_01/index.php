<?php

require_once "funcoes.php";
$euro = $_GET["euro"] ?? "";
$nota = $_GET["nota"] ?? "";
$form = !empty($nota);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 107.1</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <h1>CONVERSOR MONETÁRIO</h1>

    <form class="caixa" action="index.php" method="GET">
      <h3>VALOR EM EUROS</h3>
      <input type="number" name="euro" step="0.01" value="<?= $euro ?>">
      <br>
      <br>
      <h3>CONVERTER PARA</h3>
      <br>
      <div class="moedas">

        <label>
          DÓLAR<br>
          <input type="radio" name="nota" value="dolars" <?= $nota == "dolars" ? "checked" : "" ?>>
        </label>

        <label>
          LIBRAS<br>
          <input type="radio" name="nota" value="libras" <?= $nota == "libras" ? "checked" : "" ?>>
        </label>

        <label>
          REAIS<br>
          <input type="radio" name="nota" value="reais" <?= $nota == "reais" ? "checked" : "" ?>>
        </label>

        <label>
          IENE<br>
          <input type="radio" name="nota" value="ienes" <?= $nota == "ienes" ? "checked" : "" ?>>
        </label>

      </div>
      
      <br>
      <input type="submit" value="CALCULAR!">

    </form>

    <?php if ($form): ?>
      <div class="caixa">
        <div>
          <?php switch($nota){
            case "dolars": ?>
            <?php 
              converter_euro_dolar($euro);
              break;
            ?>
            <?php case "libras": ?>
            <?php 
              converter_euro_libra($euro);
              break;
            ?>
            <?php case "reais": ?>
            <?php 
              converter_euro_real($euro);
              break;
            ?>
            <?php case "ienes": ?>
            <?php 
              converter_euro_iene($euro);
              break;
            ?>
            <?php default: ?>
              <p>nota inválida ou não selecionada.</p>
            <?php break; ?>
          <?php } ?>
        </div>
        <a href="index.php">
          <button>RESET</button>
        </a>
      </div>
    <?php endif ?>

  </body>
</html>
