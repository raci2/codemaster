<?php

$base_dados = [
  "host" => "localhost",
  "dbname" => "codemaster_teste_bd",
  "user" => "root",
  "pass" => "",
];

$pdo = new PDO("mysql:host=$base_dados[host];dbname=$base_dados[dbname];charset=utf8mb4", $base_dados["user"], $base_dados["pass"]);

function select_sql($sql){
  global $pdo;
  $consulta = $pdo->query($sql);
  $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
  return $resultado;
}


?>