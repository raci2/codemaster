<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 115.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Entrada</h1>

  <form action="saida.php" class="caixa">
    <h3>Formulário</h3>
    <br>
    <input type="text" name="nome" placeholder="Nome" required autofocus>
    <br><br>
    <input type="number" name="preco" placeholder="Preço" required step="0.01" min="0.01">
    <br><br>
    <input type="number" name="stock" placeholder="Stock" required min="0">
    <br><br>
    <input type="submit" value="Avançar">
  </form>

</body>
</html>