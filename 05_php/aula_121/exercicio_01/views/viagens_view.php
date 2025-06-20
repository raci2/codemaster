<?php

$form = isset($_GET["posicao"]);
if($form){
  $posicao = intval($_GET["posicao"]);
  $viagem_especifica = $viagens[$posicao];
}

?>

  <main class="container my-5">

    <div class="row">
      <div class="col-12 text-center">
        <h1><?= $viagem_especifica->titulo ?></h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mt-5">
        <img src="<?= $viagem_especifica->imagem ?>" alt="" class="float-start me-3 viagem">
        <?= $viagem_especifica->texto ?>
      </div>
      
    </div>



  </main>

  