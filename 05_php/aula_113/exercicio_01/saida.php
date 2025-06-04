<?php

$form = !empty($_GET["nome"]) && !empty($_GET["apelido"]) && !empty($_GET["morada"]) && !empty($_GET["idade"]) && !empty($_GET["programacao"]);
if($form){
  $nome = $_GET["nome"];
  $apelido = $_GET["apelido"];
  $morada = $_GET["morada"];
  $idade = $_GET["idade"];
  $programacao = $_GET["programacao"];
}
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 113.1</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <h1>Processo Seletivo</h1>

    <div class="caixa">
      <h3>Etapa: 3/3</h3>
      <h4>=== Ficha de Candidatura ===</h4>
      <?php 
        echo "Nome: ( $nome ).<br>";
        echo "Idade: ( $idade anos ).<br>";
        echo "Morada: ( $morada ).<br>";
        echo "Conhecimentos em Programação: ( $programacao ).<br>";
      ?>
    </div>

    <div class="caixa">
      <h3>Resposta a Candidatura</h3>
      <br>
      <?php 
        echo "Sr.(a) $nome, gostavamos de lhe informar que seu status de candidatura é:<br>";
        if ($idade < 18 && $programar == "Sim"){
          echo "<mark>APROVADO PARA A ESCOLA DE PROGRAMAÇÃO</mark>";
        }elseif ($idade < 18 && $programacao == "Não"){
          echo "<mark>NÃO APROVADO PARA A ESCOLA DE PROGRAMAÇÃO</mark>";
        }elseif ($idade >= 18 && $programacao == "Não"){
          echo "<mark>NÃO APROVADO PARA O ESTÁGIO</mark>";
        }elseif ($idade >= 18 && $programacao == "Sim"){
          echo "<mark>APROVADO PARA O ESTÁGIO</mark>";
        }else{
          echo "<mark>ERRO NOS DADOS INFORMADOS, TENTE NOVAMENTE</mark>";
        }
      ?>
    </div>

    <a href="index.php">
      <button>Voltar</button>
    </a>
    
  </body>
</html>
