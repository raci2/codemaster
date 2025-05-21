<?php

$nome = $_GET["nome"];
$cor = $_GET["cor"];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 102.3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: <?= $cor ?>;">
  <h1>Inputs</h1>

  <div class="caixa">
    <h3>Olá ( <?php echo $nome; ?> ), vejo qu eescolheste a cor ( <?php echo $cor; ?> )</h3>
  </div>

  <a href="index.php">
    <button>Voltar</button>  
  </a>

</body>
</html>