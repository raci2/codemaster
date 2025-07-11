<?php

function get_cliente($id){
  $resultado = select_sql_unico("SELECT nome,email,telemovel FROM clientes WHERE id=$id");
  return $resultado;
}

?>