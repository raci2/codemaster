<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 116.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Entrada</h1>

  <form action="saida.php" class="caixa">
    <h3>Formulário</h3>
    <br>
    <input type="text" name="nome" placeholder="Nome" required autofocus>
    <br><br>
    <input type="number" name="idade" placeholder="Idade" required min="0">
    <br><br>
    <input type="number" name="altura" placeholder="Altura(m)" required step="0.01" min="0">
    <br><br>
    <input type="number" name="peso" placeholder="Peso(kg)" required step="0.001" min="0">
    <br><br>
    <select name="genero" require>
      <option value="">Género</option>
      <option value="Masculino">Masculino</option>
      <option value="Feminino">Feminino</option>
      <option value="Outros">Outros</option>
    </select>
    <br><br>
    <input type="submit" value="Avançar">
  </form>

</body>
</html>