  <main class="container my-4">

    <div class="row">
      <div class="col-12 text-center">
        <h1>Home</h1>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12 d-flex flex-wrap justify-content-center gap-4">

       <?php foreach($viagens as $i => $v): ?>
        
            <div class="card" style="width: 18rem;">
              <img src="<?= $v->imagem ?>" class="card-img-top" alt="<?= $v->titulo ?>">
              <div class="card-body">
                <h5 class="card-title text-center"><?= $v->titulo ?></h5>
                <p class="card-text"><?= substr(strip_tags($v->texto), 0, 100) ?>...</p>
              </div>
            </div>

          <?php endforeach ?>
      </div>
    </div>

  </main>