<?php
/*
Array/matriz - é um mapa ou conjunto ordenado de pares de chaves e valores.

Uma chave é como um índice
Um valor é como uma variável

Array vazio

$ar = array();

Funções nativas do PHP para arrays:

is_array() - checar se uma variável contém um array e retorna true ou false.

https://phpro.org/tutorials/Introduction-To-Arrays.html
*/
$a = array("a" => "maçã", "b" => "banana");
$b = array("a" =>"pêra", "b" => "framboesa", "c" => "morango");

$c = $a + $b; // Uniao de $a e $b
echo "União de \$a e \$b: <br>";
var_dump($c);

$c = $b + $a; // União de $b e $a
echo "<br><br>União de \$b e \$a: <br>";
var_dump($c);

/*
A partir da versão 5.4 do PHP podemos trabalhar com arrays assim:

$arr = [];

$arr = [0=>'zero', 1=>'um'];
*/
