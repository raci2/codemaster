<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 111.2</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <form action="saida.php" class="caixa" method="post">
          <h3>Formulário</h3>
          <br>
          <input type="text" name="login" placeholder="Login" required autofocus>
          <br><br>
          <input type="password" name="senha" placeholder="Senha" required>
          <br><br>
          <input type="submit" value="Registar">
        </form>

      </div>
    </div>
  </div>
  
</body>
</html>