<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 115.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Array com Chaves</h1>

  <form action="saida.php" class="caixa">
    <h3>Registo de Pessoa</h3>
    <br>
    <input type="text" name="nome" placeholder="Nome" required autofocus>
    <br><br>
    <input type="number" name="idade" placeholder="Idade" required>
    <br><br>
    <input type="number" name="altura" placeholder="Altura(m)" required step="0.01">
    <br><br>
    <input type="number" name="peso" placeholder="Peso(kg)" required step="0.1">
    <br><br>
    <select name="genero" id="">
      <option value="genero" disabled selected>Género</option>
      <option value="masculino">Masculino</option>
      <option value="feminino">Feminino</option>
    </select>
    <br><br>
    <input type="submit" value="Cadastrar">
  </form>

</body>
</html>