<?php
$form = !empty($_GET["nome"]) && !empty($_GET["apelido"]) && !empty($_GET["morada"]);
if($form){
  $nome = $_GET['nome'];
  $apelido = $_GET['apelido'];
  $morada = $_GET['morada'];
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

    <form class="caixa" action="saida.php">
      <h3>Etapa: 2/3</h3>
      <br>
      <input type="hidden" name="nome" value="<?= $nome?>">
      <input type="hidden" name="apelido" value="<?= $apelido?>">
      <input type="hidden" name="morada" value="<?= $morada?>">
      <input type="number" name="idade" placeholder="Idade" required autofocus>
      <br><br>
      <select name="programacao">
        <option disabled selected> --- Possui Conhecimentos em Programação? --- </option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>
      <br><br>
      <input type="submit" value="Avançar">
    </form>
    
  </body>
</html>
