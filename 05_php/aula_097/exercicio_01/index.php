<?php

echo "<h1>Horário padrao: (".date("H:i:s - d/m/Y").")</h1>";

echo "<hr>";

date_default_timezone_set("Asia/Tokyo");
echo "<h1>Horário Tóquio: (".date("H:i:s - d/m/Y").")</h1>";

date_default_timezone_set("Europe/Lisbon");
echo "<h1>Horário Lisboa: (".date("H:i:s - d/m/Y").")</h1>";

date_default_timezone_set("America/Sao_Paulo");
echo "<h1>Horário São Paulo: (".date("H:i:s - d/m/Y").")</h1>";

date_default_timezone_set("America/New_York");
echo "<h1>Horário Nova Iorque: (".date("H:i:s - d/m/Y").")</h1>"

?>