<?php

require_once "helpers/base_dados_helper.php";

$pagina_atual = (!empty($_GET["pagina_atual"])) ? intval($_GET["pagina_atual"]) : 1;
$elementos_por_pagina = 3;
$ignorar = ($pagina_atual - 1) * $elementos_por_pagina;

$resultado = select_sql_unico("SELECT Count(*) as total_elementos FROM produtos");
$total_elementos = $resultado["total_elementos"];

$total_paginas = ceil($total_elementos / $elementos_por_pagina);

$produtos = select_sql("SELECT * FROM produtos LIMIT $elementos_por_pagina OFFSET $ignorar");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 131.3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <h1>SQL</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 caixa">
        <table>

            <tr>
              <th>ID</th>
              <th>NOME</th>
              <th>PREÇO</th>
              <th>STOCK</th>
              <th>FORNECEDOR</th>
              <th>CÓDIGO</th>
            </tr>

            <?php foreach($produtos as $i => $p): ?>

              <tr>
                <td><?= $p["id"] ?></td>
                <td><?= $p["nome"] ?></td>
                <td><?= $p["preco"] ?> €</td>
                <td><?= $p["stock"] ?></td>
                <td><?= $p["fornecedor"] ?></td>
                <td><?= $p["codigo"] ?></td>
              </tr>

            <?php endforeach ?>

          </table>

      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center">

        <?php for($i=1; $i<=$total_paginas; $i++): ?>

          <a href="index.php?pagina_atual=<?= $i ?>" class="d-inline-block">
            <button class="btn btn-outline-danger <?= ($i == $pagina_atual) ? "active" : "" ?>">
              <?= $i ?>
            </button>
          <a>

        <?php endfor ?>

      </div>
    </div>

  </div>
  
</body>
</html>