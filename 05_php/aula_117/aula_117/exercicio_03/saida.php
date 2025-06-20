<?php

require_once "funcoes.php";
require_once "globais.php";

$form = !empty($_GET["nome"]) && !empty($_GET["idade"]);
$form =  $form && !empty($_GET["altura"]) && !empty($_GET["peso"]);
$form = $form && !empty($_GET["genero"]);
if($form){
  $nome = $_GET["nome"];
  $idade = intval($_GET["idade"]);
  $altura = floatval($_GET["altura"]);
  $peso = floatval($_GET["peso"]);
  $genero = $_GET["genero"];
  $pessoas[] = nova_pessoa($nome, $idade, $altura, $peso, $genero);
}
else{
  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 116.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Saída</h1>

  <table>
    <tr>
      <th>POSIÇÃO</th>
      <th>NOME</th>
      <th>IDADE</th>
      <th>ALTURA</th>
      <th>PESO</th>
      <th>IMC</th>
      <th>GÉNERO</th>
    </tr>

    <?php foreach($pessoas as $i => $p): ?>

      <tr>
        <td><?= $i+1 ?></td>
        <td><?= $p["nome"] ?></td>
        <td><?= $p["idade"] ?></td>
        <td><?= $p["altura"] ?></td>
        <td><?= $p["peso"] ?></td>
        <!-- <td><?= calc_imc($p["peso"], $p["altura"]) ?></td> -->
        <td><?= calc_imc_2($p) ?></td>
        <td><?= $p["genero"] ?></td>
      </tr>

    <?php endforeach ?>

  </table>

  <br><br>

  <a href="index.php">
    <button>Reset</button>
  </a>

</body>
</html>