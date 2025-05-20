<?php

$nome = $_GET["nome"];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 102.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <h1>Saída</h1>

  <h3>Bem-vindo(a) <?php echo $nome;?></h3>

  <a href="index.php">
    <button>Voltar</button>  
  </a>

</body>
</html>