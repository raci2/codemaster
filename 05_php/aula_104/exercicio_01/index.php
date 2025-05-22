<?php

$form = isset($_GET["base"]) && isset($_GET["altura"]);
if($form){
  $base = floatval($_GET["base"]);
  $altura = floatval($_GET["altura"]);
  $area = ($base * $altura) / 2;
}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 102.3</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Inputs</h1>

  <form class="caixa" action="saida.php">

    <input type="number" placeholder="Base do Triângulo" name="base" autofocus step="any">
    <br><br>
    <input type="number" placeholder="Altura do Triângulo" name="altura" step="any">
    <br><br>
    <input type="submit" value="Enviar">

  </form>

  <?php if($form){?>

    <div class="caixa">
      <h3>A área do triângulo é <?= number_format($area ,2) ?></h3>
    </div>

    <a href="index.php">
      <button>Reset</button>
    </a>

  <?php } ?>
</body>

</html>
