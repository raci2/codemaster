<?php

$form = !empty($_GET["total"]);
if($form){
  $total = intval($_GET["total"]);
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
  <title>Exercício 115.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Meio</h1>

  <form action="saida.php" class="caixa">

    <!-- INPUT HIDDEN -->
     <input type="hidden" name="total" value="<?= $total ?>">

    <h3>Etapa: 2/3</h3>
    <br>

    <?php for($i=1; $i<=$total; $i++): ?>

      <label for="recibo_<?= $i ?>">Recibo <?= $i ?>:</label>
      <input type="number" name="valores[]" placeholder="Valor <?= $i ?>" id="recibo_<?= $i ?>" step="0.01" min="0.01" required>
      <input type="date" name="datas[]" required>
      <br><br>

    <?php endfor ?>
    
    <input type="submit" value="Avançar">
  </form>

</body>
</html>