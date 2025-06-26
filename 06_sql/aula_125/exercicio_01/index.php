<?php

$pdo = new PDO("mysql:host=localhost;dbname=codemaster_teste_bd;charset=utf8mb4", "root", "");

$consulta = $pdo->query("SELECT * FROM `produtos`");

$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r( $resultado);
echo "</pre>";

?>