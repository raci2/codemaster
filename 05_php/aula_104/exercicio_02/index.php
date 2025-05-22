<?php

$nome = $_GET["nome"] ?? "";
$cor = $_GET["cor"] ?? "";
$form = !empty($nome);

?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 104.1</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body style="background-color:<?= $cor ?>;">

    <h1>Inputs</h1>

    <form class="caixa" action="index.php" method="GET">
      <input type="text" name="nome" placeholder="Nome" value="<?= $nome ?>" required autofocus>
      <br><br>

      <label>Cor de Fundo:</label>
      <input type="color" name="cor" value="<?= $cor ?>">
      <br><br>

      <input type="submit" value="Enviar">
    </form>

    <?php if ($form) { ?>
      
      <div class="caixa">
        <h3>Olá ( <?= $nome ?> ), vejo que escolheste a cor ( <?= $cor ?> )</h3>
      </div>

      <a href="index.php">
        <button>Reset</button>
      </a>

    <?php } ?>

  </body>
</html>