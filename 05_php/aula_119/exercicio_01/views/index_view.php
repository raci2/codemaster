<main class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap justify-content-center gap-4">
          <?php foreach($filmes as $i => $f): ?>
            <div class="cards">
              <a href="filmes.php?posicao=<?= $i ?>"> 
                <img src="<?= $f["imagem"]?>" alt="">
                <h3 class="mt-3 text-center"><?= $f["nome"]?></h3>
                <p><p class="card-text"><?= substr(strip_tags($f["texto"]), 0, 100) ?>...</p></p>
              </a>
            </div>
          <?php endforeach?>
        </div>
    </div>
</main>
