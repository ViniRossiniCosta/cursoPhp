<?php

// Operadores-arrays
// operador de uniao
$array = [0 => 'phpba','1' => 'phpsp', 2 => 'phpse'];
$array2 = [3 => 'href'];

print_r($array + $array2);

// operador igualdade
$array = [0 => 1];
$array2 = [0 => 1];

echo $array == $array2;

// operadores diferença != ou <>
$array = [0 => 1];
$array2 = [0 => 2];

echo $array != $array2;

// operador identico ===
$array1 = [0 => 1];
$array2 = [0 => 1];

echo $array === $array2

// operador nao identico !==
$array1 = [0 => 1];
$array2 = [0 => '1'];

echo $array1 !== $array2;

?>