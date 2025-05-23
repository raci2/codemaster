<?php
$cor = $_GET["cor"] ?? "";
$form = !empty($cor);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 105.1</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <h1>Inputs</h1>

    <form class="caixa" action="index.php" method="GET">
      <h3>Cor das roupas</h3>
      <br>

      <label for="branca">Branca:</label>
      <input type="radio" name="cor" id="branca" value="brancas" <?= $cor == "brancas" ? "checked" : "" ?>>
      <br>

      <label for="preta">Preta:</label>
      <input type="radio" name="cor" id="preta" value="pretas" <?= $cor == "pretas" ? "checked" : "" ?>>
      <br>

      <label for="vermelha">Vermelha:</label>
      <input type="radio" name="cor" id="vermelha" value="vermelhas" <?= $cor == "vermelhas" ? "checked" : "" ?>>
      <br>

      <label for="verde">Verde:</label>
      <input type="radio" name="cor" id="verde" value="verdes" <?= $cor == "verdes" ? "checked" : "" ?>>
      <br><br>

      <input type="submit" value="Enviar">
    </form>

    <?php if ($form): ?>
      <div class="caixa">
        <h3>Roupas <?= $cor ?></h3>
        <br>
        <div class="imagens">
          <?php if ($cor == "brancas"): ?>
            <img src="imagens/t-shirt.png" alt="T-shirt Branca">
            <img src="imagens/calca.png" alt="Calça Branca">
            <img src="imagens/chapeu.png" alt="Chapéu Branco">
          <?php elseif ($cor == "pretas"): ?>
            <img src="imagens/t-shirt_preta.png" alt="T-shirt Preta">
            <img src="imagens/calca_preta.png" alt="Calça Preta">
            <img src="imagens/chapeu_preto.png" alt="Chapéu Preto">
          <?php elseif ($cor == "vermelhas"): ?>
            <img src="imagens/t-shirt_vermelha.png" alt="T-shirt Vermelha">
            <img src="imagens/calca_vermelha.png" alt="Calça Vermelha">
            <img src="imagens/chapeu_vermelho.png" alt="Chapéu Vermelho">
          <?php elseif ($cor == "verdes"): ?>
            <img src="imagens/t-shirt_verde.png" alt="T-shirt Verde">
            <img src="imagens/calca_verde.png" alt="Calça Verde">
            <img src="imagens/chapeu_verde.png" alt="Chapéu Verde">
          <?php endif ?>
        </div>
      </div>

      <a href="index.php">
        <button>Reset</button>
      </a>
    <?php endif ?>

  </body>
</html>
