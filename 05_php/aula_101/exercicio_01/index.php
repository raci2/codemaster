<?php 
$nome = "João Silva";
$imagem = "imagens/neve.png";
$cor_fundo = "black";
$texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae quaerat qui esse? Consequatur facilis tempora suscipit aliquid odio cupiditate ad, fuga fugiat perspiciatis facere ipsum beatae, natus ipsam aliquam!";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 101.1</title>
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: <?php echo $cor_fundo; ?>;">

  <div class="div-1">
    <div><img src="<?php echo $imagem; ?>" alt=""></div>
    <div class="texto">
      <h3><?php echo $nome; ?></h3>
      <p><?php echo $texto; ?></p>
    </div>
  </div>

</body>

</html>
