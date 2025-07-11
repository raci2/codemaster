<?php

require_once "requisitos.php";

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);
if($form){
  $login = $_POST["login"];
  $senha = $_POST["senha"];
  if(fazer_login($login, $senha)){
    header("Location: home.php");
  }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 135.2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

  <div class="container-fluid my-4">

    <div class="row">
      <div class="col-12">
        <h1>SQL</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12">

        <form action="" class="caixa" method="post" autocomplete="off">
          <h3>Login</h3>
          
          <?php if($form): ?>
            <br>
            <p class="text-danger">Login Inválido!</p>
          <?php endif ?>
          
          <br>
          <input type="text" name="login" placeholder="Login" autofocus required>
          <br><br>
          <input type="password" name="senha" placeholder="Senha" required>
          <br><br>
          <input type="submit" value="Logar">
        </form>

      </div>
    </div>

  </div>
  
</body>
</html>