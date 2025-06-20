<?php

$form = !empty($_GET["termo"]);
if($form){
  $termo = $_GET["termo"];
  $resultado = fazer_busca($termo);
}

?>

  <main class="container my-4">

    <div class="row">
      <div class="col-12 text-center">
        <h1>Busca</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 d-flex justify-content-center flex-wrap gap-4 text-center">

        <?php if(!empty($resultado)): ?>

          <?php foreach($resultado as $i => $r): ?>

            <?php $v = $r["viagem"] ?>
        
            <div class="card" style="width: 18rem;">
              <img src="<?= $v->imagem ?>" class="card-img-top" alt="<?= $v->titulo ?>">
              <div class="card-body">
                <h5 class="card-title"><?= $v->titulo ?></h5>
                <p class="card-text"><?= substr(strip_tags($v->texto), 0, 75) ?>...</p>
                <a href="viagem.php?posicao=<?= $r["posicao_original"] ?>" class="btn btn-primary">Ver Mais</a>
              </div>
            </div>

          <?php endforeach ?>

        <?php else: ?>

          <h4>NENHUMA VIAGEM ENCONTRADA!</h4>

        <?php endif ?>

      </div>
    </div>

  </main>