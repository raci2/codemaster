<?php

require_once "helpers/base_dados_helper.php";

$form = isset($_GET["id"]);
$id = "";
$produto = null;

if ($form) {
  $id = intval($_GET["id"]);
  $produto = select_sql_unico("SELECT * FROM produtos WHERE id=$id LIMIT 1");
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 130.1</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  

<form action="" class="caixa">
  <h3>Formulário</h3>
  <br>
  <input type="number" name="id" value="<?= $id ?>" required placeholder="Pesquisa Única">
  <br><br>
  <input type="submit" value="Enviar">
  <br><br>
  <a href="index.php">
    <button type="button">Reset</button>
  </a>
</form>

<?php if ($form && $produto): ?>
  <div class="caixa">
    <h3>Resultado de busca pelo código (<?= $id ?>)</h3>
    <br>

    <ul>
      <li>Id: (<?= $produto["id"] ?>)</li>
      <li>Nome: (<?= $produto["nome"] ?>)</li>
      <li>Preço: (<?= number_format($produto["preco"], 2, ",") ?>)</li>
      <li>Stock: (<?= $produto["stock"] ?>)</li>
      <li>Fornecedor: (<?= $produto["fornecedor"] ?>)</li>
    </ul>
  </div>
  <?php elseif ($form): ?>
    <div class="caixa">
      <h3>Resultado de busca pelo código (<?= $id ?>)</h3>
      <br>
      <p>Sem resultado.</p>
    </div>
  <?php endif ?>

</body>
</html>
