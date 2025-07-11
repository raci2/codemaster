<?php

require_once "helpers/base_dados_helper.php";

$pagina_atual = 5;
$elementos_por_pagina = 3;
$ignorar = ($pagina_atual - 1) * $elementos_por_pagina;

$produtos = select_sql("SELECT id,nome FROM produtos LIMIT $elementos_por_pagina OFFSET $ignorar");

?>

<pre><?php print_r($produtos) ?></pre>