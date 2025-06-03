<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 112.1</title>
  </head>

  <body style="background-color: black; color: white;">


  <?php 

    $produtos = ["Mesa", "Cadeira", "Papel A4", "Caneta Azul", "Bolsa Vermelha", "X-Acto", "Xbox", "Borracha"];
    $fruta = "morango,banana,maçã,uva";

    echo "<h1>Array original</h1>";
    echo "<pre>";
    print_r($produtos);
    echo "</pre>";

    echo "<hr>";

    echo "<h1>Contar o total de elementos</h1>";
    echo count($produtos);

    echo "<hr>";

    echo "<h1>Adicionar novo elemento</h1>";

    $produtos[] = "Lápis Verde";
    echo "<pre>";
    print_r($produtos);
    echo "</pre>";

    echo "<hr>";

    echo "<h1>Remover último elemento</h1>";

    array_pop($produtos);
    echo "<pre>";
    print_r($produtos);
    echo "</pre>";

    echo "<hr>";

    echo "<h1>Inverso do original</h1>";

    $novo_produtos = array_reverse($produtos);
    echo "<pre>";
    print_r($produtos);
    echo "</pre>";

    echo "<hr>";

    echo "<h1>Ordenar na ordem crescente</h1>";

    sort($produtos);
    echo "<pre>";
    print_r($produtos);
    echo "</pre>";

    echo "<hr>";

    echo "<h1>Ordenar na ordem decrescente</h1>";

    rsort($produtos);
    echo "<pre>";
    print_r($produtos);
    echo "</pre>";

    echo "<hr>";

    echo "<h1>Retornar um elemento aleatório do array</h1>";

    echo $produtos[array_rand($produtos)];

    echo "<hr>";



    echo "<h1>Remove elemento de uma posição específica (3)</h1>";

    array_splice($produtos, 3, 1);
    echo "<pre>";
    print_r($produtos);
    echo "</pre>";

    echo "<hr>";

    echo "<h1>Adiciona um  elemento em uma posição específica (1)(Caderno)</h1>";

    array_splice($produtos, 1, 0,"Caderno");
    echo "<pre>";
    print_r($produtos);
    echo "</pre>";


    echo "<h1>Transforma array em string</h1>";

    echo implode(" - ", $produtos);

    echo "<hr>";

    echo "<h1>Transforma array em string</h1>";

    echo "string original = $fruta";
    $array_frutas = explode(",", $fruta);
    echo "<pre>";
    print_r($array_frutas);
    echo "</pre>";

  ?>

  </body>
</html>