<?php

echo "<pre>";
print_r($_FILES["foto"]);
echo "</pre>";

$form = !empty($_FILES["foto"]);
if($form){
  
  $foto = $_FILES["foto"];
  $nome_temp = $foto["tmp_name"];
  $nome_original = $foto["name"];
  $destino = "uploads/" . $nome_original;
  $size = $foto["size"] / 1024 / 1024;

  if($size > 2){
    echo "<h3>ERRO! Ficheiro maior que 2MB</h3>";
  }
  else{
    move_uploaded_file($nome_temp, $destino);
  }
  
}

?>