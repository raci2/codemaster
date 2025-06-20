<?php

require_once "funcoes.php";
require_once "globais.php";

$form = !empty($_GET["nome"]) && !empty($_GET["idade"]) && !empty($_GET["altura"]) && !empty($_GET["peso"]) && !empty($_GET["genero"]);
if($form){
  
  $nome = $_GET["nome"];
  $idade = intval($_GET["idade"]);
  $altura = floatval($_GET["altura"]);
  $peso = floatval($_GET["peso"]);
  $genero = $_GET["genero"];
  $nova_pessoa = criar_pessoa($nome, $idade, $altura, $peso, $genero);
  $pessoas[] = $nova_pessoa;
}else{
  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 115.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Registos</h1>

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
      <?php
        $imc = floatval($pessoas[$i]["peso"] / ($pessoas[$i]["altura"] * $pessoas[$i]["altura"]));
      ?>
      <tr>
        <td><?= $i + 1 ?></td>
        <td><?= $pessoas[$i]["nome"] ?></td>
        <td><?= $pessoas[$i]["idade"]?></td>
        <td><?= number_format($pessoas[$i]["altura"], 2) ?></td>
        <td><?= number_format($pessoas[$i]["peso"], 1) ?></td>
        <td><?= number_format($imc, 1) ?></td>
        <td><?= $pessoas[$i]["genero"] ?></td>
      </tr>

    <?php endfor ?>
  </table>

  <br>

  <a href="index.php">
    <button>Reset</button>
  </a>

  <div class="caixa">
    <?php 
      echo "<pre>";
      print_r($pessoas);
      echo "</pre>";
    ?>
  </div>

</body>
</html>