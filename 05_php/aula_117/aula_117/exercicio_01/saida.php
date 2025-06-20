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

    <?php for($i=0; $i<count($pessoas); $i++): ?>

      <tr>
        <td><?= $i+1 ?></td>
        <td><?= $pessoas[$i]["nome"] ?></td>
        <td><?= $pessoas[$i]["idade"] ?></td>
        <td><?= $pessoas[$i]["altura"] ?></td>
        <td><?= $pessoas[$i]["peso"] ?></td>
        <!-- <td><?= calc_imc($pessoas[$i]["peso"], $pessoas[$i]["altura"]) ?></td> -->
        <td><?= calc_imc_2($pessoas[$i]) ?></td>
        <td><?= $pessoas[$i]["genero"] ?></td>
      </tr>

    <?php endfor ?>

  </table>

  <br><br>

  <a href="index.php">
    <button>Reset</button>
  </a>

</body>
</html>