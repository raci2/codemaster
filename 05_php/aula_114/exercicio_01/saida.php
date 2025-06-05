<?php

$form = !empty($_GET["total"]) && !empty($_GET["recibos"]) && !empty($_GET["datas"]);
if($form){
  $total = intval($_GET["total"]);
  $recibos = $_GET["recibos"];
  $datas = $_GET["datas"];
}else{
  header("Location: meio.php");
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

    <h1>Fim</h1>

    <div class="tabela">
      <table>
        <tr>
          <th>ID</th>
          <th>Valor</th>
          <th>Data</th>
        </tr>
        <?php
          $valor_total = 0;
          for ($i = 0; $i < $total; $i++) {
            $partes = explode("-", $datas[$i]);
            $data_reversa = $partes[2] . "-" . $partes[1] . "-" . $partes[0];
            $valor = floatval($recibos[$i]);
            $valor_total += $valor;
            $class = ($i % 2 == 0) ? "bg-cinza" : "bg-preto";

            echo "<tr class='$class'>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>{$recibos[$i]}€</td>";
            echo "<td>$data_reversa</td>";
            echo "</tr>";
          }
          $iva = $valor_total * 0.23;
          $retido = $valor_total - $iva;
        ?>
      </table>
    </div>

    <div>
      <h3>Valor Retido: (<?= number_format($retido, 2) ?> €)</h3>
      <h3>Valor IVA: (<?= number_format($iva, 2) ?> €)</h3>
      <h3>Valor Total Arrecadado: (<?= number_format($valor_total, 2) ?> €)</h3>
    </div>

    <br>

    <a href="index.php">
      <button>Voltar</button>
    </a>
    
  </body>
</html>
