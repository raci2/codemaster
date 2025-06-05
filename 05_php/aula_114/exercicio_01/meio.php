<?php
$form = !empty($_GET["total"]);
if($form){
  $total = intval($_GET['total']);
}else{
  header("Location: index.php");
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

    <h1>Meio</h1>

    <form class="caixa" action="saida.php">
      <input type="hidden" name="total" value="<?= $total?>">
      <?php for($i = 1; $i <= $total; $i++):?>
        <label for="id_<?=$i?>">Recibo <?= $i ?></label>
        <input type="number" name="recibos[]" placeholder="Valor <?= $i?>" id="id_<?=$i?>"required autofocus step="0.01">
        <input type="date" name="datas[]" id="id_<?=$i?>" required>
        <br><br>
      <?php endfor?>
      <input type="submit" value="Avançar">
    </form>
    
  </body>
</html>
