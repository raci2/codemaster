<?php
$cor = $_GET["cor"] ?? "";
$form = !empty($cor);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 104.1</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <h1>Inputs</h1>

    <form class="caixa" action="index.php" method="GET">
      <label for="roupas">Cor das roupas</label>
      <select name="cor" id="roupas">
        <option value="Branca">Branca</option>
        <option value="Preta">Preta</option>
      </select>
      <br><br>
      <input type="submit" value="Enviar">
    </form>

    <?php if ($form) { ?>
      <div class="caixa">
        <h3>Roupas <?= $cor ?></h3>
        <div class="imagens">
          <?php if ($cor == "Branca") { ?>
            <img src="imagens/t-shirt.png" alt="T-shirt Branca">
            <img src="imagens/calca.png" alt="Calça Branca">
            <img src="imagens/chapeu.png" alt="Chapéu Branco">
          <?php } else { ?>
            <img src="imagens/t-shirt_preta.png" alt="T-shirt Preta">
            <img src="imagens/calca_preta.png" alt="Calça Preta">
            <img src="imagens/chapeu_preto.png" alt="Chapéu Preto">
          <?php } ?>
        </div>
      </div>

      <a href="index.php">
        <button>Reset</button>
      </a>
    <?php } ?>

  </body>
</html>
