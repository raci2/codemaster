<?php
$nome = $_GET["nome"] ?? "";
$foto = $_GET["foto"] ?? "";
$descricao = $_GET["descricao"] ?? "";
$anterior = $_GET["anterior"] ?? 0;
$posterior = $_GET["posterior"] ?? 0;

$form = !empty($nome) && !empty($foto) && !empty($descricao);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 110.2</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <br>
    <a href="index.php">
      <button>Voltar</button>  
    </a>

    <?php for($i = 1; $i <= $anterior; $i++):?>
      <?php $img = rand(1, 4); ?>
      <div class="div-1">
        <div><img src="imagens/<?=$img?>.png" alt=""></div>
        <div class="texto">
          <h3>Perfil Anterior <?= $i?></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae quaerat qui esse? Consequatur facilis tempora suscipit aliquid odio cupiditate ad, fuga fugiat perspiciatis facere ipsum beatae, natus ipsam aliquam!</p>
        </div>
      </div>
    <?php endfor?>
 
    <?php if ($form): ?>
      <div class="div-1 especial">
        <div><img src="<?= $foto; ?>" alt=""></div>
        <div class="texto">
          <h3><?= $nome; ?></h3>
          <p><?= $descricao; ?></p>
        </div>
      </div> 
    <?php endif ?>
    
    
    <?php for($i = 1; $i <= $posterior; $i++):?>
      <?php $img = rand(1, 4); ?>
      <div class="div-1">
        <div><img src="imagens/<?=$img?>.png" alt=""></div>
        <div class="texto">
          <h3>Perfil Posterior <?= $i?></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae quaerat qui esse? Consequatur facilis tempora suscipit aliquid odio cupiditate ad, fuga fugiat perspiciatis facere ipsum beatae, natus ipsam aliquam!</p>
        </div>
      </div>
    <?php endfor?>

  </body>

</html>