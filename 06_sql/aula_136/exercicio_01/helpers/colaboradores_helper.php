<?php

session_start();

function fazer_login($login, $senha){
  global $pdo;
  
  $consulta = $pdo->prepare("SELECT * FROM colaboradores WHERE login=?");
  $consulta->execute([$login]);
  $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

  if(!empty($usuario) && password_verify($senha, $usuario["senha"])){
    $_SESSION["usuario"] = $usuario;
    return true;
  }
  else{
    return false;
  }
}

function verificar_logado(){
  if(!empty($_SESSION["usuario"])){return $_SESSION["usuario"];}
  else{
    header("Location: index.php");
    // return false;
  }
}

function logout(){
  session_destroy();
  header("Location: index.php");
}

?>