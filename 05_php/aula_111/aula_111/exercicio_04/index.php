<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 111.1</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <form action="saida.php" class="caixa" method="post" enctype="multipart/form-data">
          <h3>Formulário</h3>
          <br>
          <input type="text" name="nome" placeholder="Nome" required autofocus>
          <br><br>
          <!-- <input type="text" name="foto" placeholder="Foto do Perfil" required> -->
          <input type="file" name="foto" required>
          <br><br>
          <textarea name="descricao" placeholder="Descriçao" required></textarea>
          <br><br>
          <input type="number" name="antes" placeholder="Nº perfis anteriores" required min="0">
          <input type="number" name="depois" placeholder="Nº perfis posteriores" required min="0">
          <br><br>
          <input type="submit" value="Registar">
        </form>

      </div>
    </div>
  </div>
  
</body>
</html>