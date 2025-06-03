<?php

$form = !empty($_GET["nome"]) && !empty($_GET["foto"]) && !empty($_GET["descricao"]) && isset($_GET["antes"]) && isset($_GET["depois"]);
if($form){
  $nome = $_GET["nome"];
  $foto = $_GET["foto"];
  $descricao = $_GET["descricao"];
  $antes = intval($_GET["antes"]);
  $depois = intval($_GET["depois"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 111.1</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container-fluid">

    <div class="row mt-4">
      <div class="col-12 text-center">
        <a href="index.php">
          <button>Voltar</button>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-12">

        <?php for($i=1; $i<=$antes; $i++): ?>

          <div class="perfil m-auto border border-white rounded-4 bg-secondary text-black my-4">
            <div class="container-fluid">
              <div class="row">
                <div class="col-4 px-0">
                  <img src="imagens/<?= rand(1, 4) ?>.png" alt="Imagem de Perfil" class="w-100 rounded-start-4">
                </div>
                <div class="col-8">
                  <h4 class="pt-3 pb-2">Perfil Anterior <?= $i ?></h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur hic repudiandae omnis deserunt nesciunt, officia impedit sunt neque deleniti eos velit facere repellendus ab consequatur? Tempora ratione cupiditate atque voluptates.
                  </p>
                </div>
              </div>
            </div>
          </div>

        <?php endfor ?>

        <div class="perfil especial m-auto rounded-4 text-black my-4">
          <div class="container-fluid">
            <div class="row">
              <div class="col-4 px-0">
                <img src="<?= $foto ?>" alt="Imagem de Perfil" class="w-100 rounded-start-4">
              </div>
              <div class="col-8">
                <h4 class="pt-3 pb-2"><?= $nome ?></h4>
                <p><?= $descricao ?></p>
              </div>
            </div>
          </div>
        </div>

        <?php for($i=1; $i<=$depois; $i++): ?>

          <div class="perfil m-auto border border-white rounded-4 bg-secondary text-black my-4">
            <div class="container-fluid">
              <div class="row">
                <div class="col-4 px-0">
                  <img src="imagens/<?= rand(1, 4) ?>.png" alt="Imagem de Perfil" class="w-100 rounded-start-4">
                </div>
                <div class="col-8">
                  <h4 class="pt-3 pb-2">Perfil Posteriores <?= $i ?></h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur hic repudiandae omnis deserunt nesciunt, officia impedit sunt neque deleniti eos velit facere repellendus ab consequatur? Tempora ratione cupiditate atque voluptates.
                  </p>
                </div>
              </div>
            </div>
          </div>

        <?php endfor ?>

      </div>
    </div>
  </div>
  
</body>
</html>