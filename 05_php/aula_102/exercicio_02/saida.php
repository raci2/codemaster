<?php

$celsius = floatval($_GET["temp"]);
$far =  $celsius * 1.8 + 32;
$kelvin = $celsius + 273.15;

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 102.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Conversor de Temperaturas 2.0</h1>

  <div class="caixa">
    <h3>Celsius =  (<?php echo number_format($celsius, 2);?> ºC)</h3>
    <br>
    <h3>Fahrenheit =  (<?php echo number_format($far, 2);?> F)</h3>
    <br>
    <h3>Kelvin =  (<?php echo number_format($kelvin, 2);?> ºK)</h3>
  </div>

  <a href="index.php">
    <button>Voltar</button>  
  </a>

</body>
</html>