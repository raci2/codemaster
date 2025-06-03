<?php 

$alunos = ["fabricio", "maria", "jose"];

echo "<pre>";
print_r($alunos);
echo "</pre>";

echo "<hr>";

$alunos[] = "alice";
echo "<pre>";
print_r($alunos);
echo "</pre>";

echo "<hr>";

array_pop($alunos);
echo "<pre>";
print_r($alunos);
echo "</pre>";

echo "<hr>";

echo count($alunos);

echo "<hr>";

$novo_alunos = array_reverse($alunos);
echo "<pre>";
print_r($alunos);
echo "</pre>";

echo "<hr>";

sort($alunos);
echo "<pre>";
print_r($alunos);
echo "</pre>";

echo "<hr>";

rsort($alunos);
echo "<pre>";
print_r($alunos);
echo "</pre>";

echo "<hr>";

echo $alunos[array_rand($alunos)];

echo "<hr>";

echo implode(" - ", $alunos);

echo "<hr>";

array_splice($alunos, 1, 1);
echo "<pre>";
print_r($alunos);
echo "</pre>";

echo "<hr>";

array_splice($alunos, 1, 0,"bruno");
echo "<pre>";
print_r($alunos);
echo "</pre>";
?>