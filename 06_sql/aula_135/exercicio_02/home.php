<?php

require_once "requisitos.php";

$usuario = verificar_logado();

$produtos = select_sql("SELECT * FROM produtos");

?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 135.2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

  <div class="container-fluid my-4">

    <div class="row">
      <div class="col-12">
        <h1>SQL</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center">
        <!-- <h3>Bem-vindo(a) <?= $_SESSION["usuario"]["nome"] ?></h3> -->
        <h3>Bem-vindo(a) <?= $usuario["nome"] ?></h3>
        <br>
        <a href="logout.php">
          <button>Sair</button>
        </a>
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

  </div>
  
</body>
</html>