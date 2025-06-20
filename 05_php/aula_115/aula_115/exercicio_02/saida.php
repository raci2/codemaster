<?php

$form = !empty($_GET["total"]) && !empty($_GET["valores"]) && !empty($_GET["datas"]);
if($form){
  $total = intval($_GET["total"]);
  $valores = $_GET["valores"];
  $datas = $_GET["datas"];

  $soma_total = array_sum($valores);
  $iva = $soma_total * 0.23;
  $retido = $soma_total - $iva;
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

  <h1>Saída</h1>

  <table>
    <tr>
      <th>ID</th>
      <th>VALOR</th>
      <th>DATA</th>
    </tr>

    <?php for($i=0; $i<$total; $i++): ?>

      <tr>
        <td><?= $i+1 ?></td>
        <td><?= number_format($valores[$i], 2, ",", " ") ?> €</td>
        <td><?= date("d/m/Y", strtotime($datas[$i])) ?></td>
      </tr>

    <?php endfor ?>

  </table>

  <br><br>

  <h3>
    Valor Retido: ( <?= number_format($retido, 2, ",", " ") ?> € )
    <br>
    Valor IVA: ( <?= number_format($iva, 2, ",", " ") ?> € )
    <br>
    Valor Total Arrecadado: ( <?= number_format($soma_total, 2, ",", " ") ?> € )
  </h3>

  <br><br>

  <a href="index.php">
    <button>Voltar</button>
  </a>

</body>
</html>