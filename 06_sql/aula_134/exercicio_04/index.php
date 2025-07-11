<?php

require_once "helpers/base_dados_helper.php";
require_once "helpers/clientes_helper.php";

$motas_antigo = select_sql("SELECT * FROM motas_antigo");
$motas = select_sql("SELECT * FROM motas");

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
              <th>MATRÍCULA</th>
              <th>MODELO</th>
              <th>COR</th>
              <th>CLIENTE</th>
              <th>EMAIL</th>
              <th>TELEMÓVEL</th>
            </tr>

            <?php foreach($motas_antigo as $i => $p): ?>

              <tr>
                <td><?= $p["id"] ?></td>
                <td><?= $p["matricula"] ?></td>
                <td><?= $p["modelo"] ?></td>
                <td><?= $p["cor"] ?></td>
                <td><?= $p["nome_cliente"] ?></td>
                <td><?= $p["email_cliente"] ?></td>
                <td><?= $p["telemovel_cliente"] ?></td>
              </tr>

            <?php endforeach ?>

          </table>

      </div>
    </div>

    <div class="row">
      <div class="col-12 caixa">
        <table>

            <tr>
              <th>ID</th>
              <th>MATRÍCULA</th>
              <th>MODELO</th>
              <th>COR</th>
              <th>CLIENTE</th>
              <th>EMAIL</th>
              <th>TELEMÓVEL</th>
            </tr>

            <?php foreach($motas as $i => $p): ?>

              <?php $ce = get_cliente($p["id_cliente"]) ?>

              <tr>
                <td><?= $p["id"] ?></td>
                <td><?= $p["matricula"] ?></td>
                <td><?= $p["modelo"] ?></td>
                <td><?= $p["cor"] ?></td>
                <td><?= $ce["nome"] ?></td>
                <td><?= $ce["email"] ?></td>
                <td><?= $ce["telemovel"] ?></td>
              </tr>

            <?php endforeach ?>

          </table>

      </div>
    </div>

  </div>
  
</body>
</html>