<?php

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);
if($form){
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  echo "<h3>" . $login . "</h3>";
  echo "<h3>" . $senha . "</h3>";

}

?>