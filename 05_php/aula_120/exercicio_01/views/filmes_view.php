<?php

$form = isset($_GET["posicao"]);
if($form){
  $posicao = intval($_GET["posicao"]);
  $filme_especifico = $filmes[$posicao];
}

?>

  <main class="container my-5">

    <div class="row">
      <div class="col-12 text-center">
        <h1><?= $filme_especifico["nome"] ?></h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <img src="<?= $filme_especifico["imagem"] ?>" alt="" class="float-start me-3 imagem">
        <?= $filme_especifico["texto"] ?>
        <a href="index.php" class="btn btn-primary mt-5 w-50">Voltar</a>
      </div>
      
    </div>



  </main>

  