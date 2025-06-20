<?php require_once "requisitos.php"; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 122.1</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

  <!-- LOCAL CSS -->
  <link rel="stylesheet" href="public/css/style.css">

</head>
<body>

  <header class="container-fluid">

    <div class="row">
      <div class="col-12 p-0">
        <nav class="navbar navbar-expand-md bg-primary navbar-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Agência de Viagens</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link <?= ($menu_atual == "index") ? "active" : "" ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle <?= ($menu_atual == "viagem") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Viagens
                  </a>
                  <ul class="dropdown-menu">

                    <?php foreach($viagens as $i => $v): ?>

                      <li><a class="dropdown-item" href="viagem.php?posicao=<?= $i ?>"><?= $v->titulo ?></a></li>

                    <?php endforeach ?>

                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Contactos</a>
                </li>
              </ul>
              <form class="d-flex" role="search" action="busca.php">
                <input class="form-control me-2 text-center" minlength="3" type="search" name="termo" placeholder="Viagem" aria-label="Search"/>
                <button class="btn btn-outline-light" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-12 p-0">
        <div id="teste" class="carousel slide">
          <div class="carousel-indicators">

            <?php foreach($carousel as $i => $b): ?>

              <button type="button" data-bs-target="#teste" data-bs-slide-to="<?= $i ?>" class="<?= ($i == 0) ? "active" : "" ?>" aria-label="Slide 2"></button>
          
            <?php endforeach ?>

          </div>
          <div class="carousel-inner">

            <?php foreach($carousel as $i => $b): ?>

              <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                <img src="<?= $b->imagem ?>" class="d-block w-100" alt="<?= $b->titulo ?>">
                <div class="carousel-caption d-none d-md-block">
                  <h5><?= $b->titulo ?></h5>
                  <p><?= $b->legenda ?></p>
                </div>
              </div>

            <?php endforeach ?>
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#teste" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#teste" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

  </header>