<?php

require_once "helpers/funcoes.php";
require_once "helpers/globais.php";

?>

<!DOCTYPE html>
<html lang="pt">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 120.1</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="public/css/style.css">
  </head>

  <body>

    <header class="container-fluid">
      <div class="row">
          <div class="col px-0 text-white">
              <nav class="navbar navbar-expand-lg bg-danger">
                  <div class="container-fluid">
                      <a class="navbar-brand" href="#">Filmes</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Filmes
                        </a>
                        <ul class="dropdown-menu">
                          <?php foreach($filmes as $i => $f): ?>

                            <li>
                              <a class="dropdown-item text-dark" href="filmes.php?posicao=<?= $i ?>">
                                <?= $f["nome"] ?>
                              </a>
                            </li>

                          <?php endforeach ?>
                        </ul>
                        </li>
                      </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>

    <div class="row">
      <div class="col p-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">

            <?php foreach($carousel as $i => $b): ?>

              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>" class="<?= ($i == 0) ? "active" : "" ?>" aria-label="Slide 1"></button>

            <?php endforeach ?>

          </div>
          <div class="carousel-inner">

            <?php foreach($carousel as $i => $b): ?>

              <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                <img src="<?= $b["imagem"] ?>" class="d-block w-100" alt="<?= $b["imagem"] ?>">
                <div class="carousel-caption d-none d-md-block">
                  <h5><?= $b["titulo"] ?></h5>
                  <p><?= $b["legenda"] ?></p>
                </div>
              </div>

            <?php endforeach ?>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </header>