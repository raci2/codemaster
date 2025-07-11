<?php

$senha_original = "love";

$senha_hash = password_hash($senha_original, PASSWORD_DEFAULT);

echo "<h1>" . $senha_original . "</h1>";
echo "<h1>" . $senha_hash . "</h1>";

?>