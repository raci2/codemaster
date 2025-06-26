<?php

$form = isset($_GET["posicao"]);
if($form){
  $posicao = intval($_GET["posicao"]);
  if(!empty($viagens[$posicao])){$viagem = $viagens[$posicao];}
}

?>

  <main class="container my-4">

    <?php if(!empty($viagens[$posicao])): ?>

      <div class="row">
        <div class="col-12 text-center">
          <h1><?= $viagem->titulo ?></h1>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-12 viagem-img">
          <img src="<?= $viagem->imagem ?>" alt="<?= $viagem->titulo ?>" class="w-50 float-start me-3 mb-2">
          <?= $viagem->texto ?>
        </div>
      </div>

    <?php else: ?>

      <div class="row">
        <div class="col-12 text-center">
          <h1>VIAGEM NÃO ENCONTRADA!</h1>
        </div>
      </div>

    <?php endif ?>

  </main>